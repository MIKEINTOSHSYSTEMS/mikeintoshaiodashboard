<?php
header('Content-Type: application/json');

// Database connection details
$dbHost = '192.168.160.50';
$dbUser = 'me_dereja';
$dbPassword = 'me_dereja';
$dbName = 'me_derejaforms';

// Hardcoded password (same as in backup.php)
$hardcodedPassword = 'me@dereja';

// Password verification
if (!isset($_POST['password']) || $_POST['password'] !== $hardcodedPassword) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
    exit;
}

// Check if file was uploaded
if (!isset($_FILES['backupFile']) || $_FILES['backupFile']['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(['success' => false, 'message' => 'No file uploaded or upload error']);
    exit;
}

$file = $_FILES['backupFile'];

// Validate file type
$allowedExtensions = ['sql', 'gz'];
$fileName = $file['name'];
$fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

if (!in_array($fileExt, $allowedExtensions)) {
    echo json_encode(['success' => false, 'message' => 'Invalid file type. Only .sql and .gz files are allowed']);
    exit;
}

// Validate file size (100MB max)
if ($file['size'] > 100 * 1024 * 1024) {
    echo json_encode(['success' => false, 'message' => 'File size exceeds 100MB limit']);
    exit;
}

// Backup directory - use absolute path for consistency
$backupDir = './backup';

// Create backup directory if it doesn't exist
if (!file_exists($backupDir)) {
    if (!mkdir($backupDir, 0775, true)) {
        echo json_encode([
            'success' => false, 
            'message' => 'Failed to create backup directory',
            'debug' => [
                'path' => $backupDir,
                'permissions' => substr(sprintf('%o', fileperms(dirname($backupDir))), -4)
            ]
        ]);
        exit;
    }
}

// Verify directory permissions
if (!is_writable($backupDir)) {
    $owner = posix_getpwuid(fileowner($backupDir))['name'] ?? 'unknown';
    $group = posix_getgrgid(filegroup($backupDir))['name'] ?? 'unknown';
    $processUser = posix_getpwuid(posix_geteuid())['name'] ?? 'unknown';
    
    echo json_encode([
        'success' => false,
        'message' => "Cannot write to backup directory ($backupDir)",
        'debug' => [
            'permissions' => substr(sprintf('%o', fileperms($backupDir)), -4),
            'owner' => $owner,
            'group' => $group,
            'process_user' => $processUser,
            'suggested_fix' => 'Run: sudo chown www-data:www-data ' . $backupDir . ' && sudo chmod 775 ' . $backupDir
        ]
    ]);
    exit;
}

// Generate filename with standard pattern plus "UPLOADED" marker
$backupFile = 'derejame_forms_backup_UPLOADED_' . date('Ymd_His') . '.' . $fileExt;
$destination = $backupDir . '/' . $backupFile;

// Ensure filename is unique by adding suffix if file exists
$counter = 1;
while (file_exists($destination)) {
    $backupFile = 'derejame_forms_backup_UPLOADED_' . date('Ymd_His') . '_' . $counter . '.' . $fileExt;
    $destination = $backupDir . '/' . $backupFile;
    $counter++;
}

// Move the uploaded file
if (move_uploaded_file($file['tmp_name'], $destination)) {
    // Verify the file is not empty
    if (filesize($destination) === 0) {
        unlink($destination);
        echo json_encode(['success' => false, 'message' => 'Uploaded file is empty']);
        exit;
    }
    
    // Set proper permissions on the uploaded file
    chmod($destination, 0664);
    
    echo json_encode([
        'success' => true,
        'message' => 'Backup uploaded successfully: ' . $backupFile,
        'filename' => $backupFile,  // Changed from $uniqueName to $backupFile
        'path' => $destination,
        'size' => filesize($destination),
        'formatted_size' => round(filesize($destination) / 1024, 2) . ' KB',
        'timestamp' => date('Y-m-d H:i:s', filemtime($destination))
    ]);
} else {
    $error = error_get_last();
    echo json_encode([
        'success' => false, 
        'message' => 'Failed to move uploaded file: ' . $error['message'],
        'debug' => [
            'error' => $error,
            'source' => $file['tmp_name'],
            'destination' => $destination,
            'permissions' => [
                'source' => is_readable($file['tmp_name']) ? 'readable' : 'not readable',
                'destination_dir' => is_writable($backupDir) ? 'writable' : 'not writable'
            ],
            'filename_attempted' => $backupFile
        ]
    ]);
}
?>