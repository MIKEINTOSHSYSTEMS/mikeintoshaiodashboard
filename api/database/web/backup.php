<?php
$hardcodedPassword = 'me@dereja';

if (!isset($_POST['password']) || $_POST['password'] !== $hardcodedPassword) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
    exit;
}

// Database connection details
$dbHost = '192.168.160.50';
$dbUser = 'me_dereja';
$dbPassword = 'me_dereja';
$dbName = 'me_dereja';

// Directory to store backups
//$backupDir = '/var/www/html/api/database/web/backup';
$backupDir = './backup';

// Try to create directory if it doesn't exist
if (!is_dir($backupDir)) {
    if (!mkdir($backupDir, 0775, true)) {
        echo json_encode(['success' => false, 'message' => 'Failed to create backup directory']);
        exit;
    }
    // Try to set root ownership if running with sufficient privileges
    if (posix_geteuid() === 0) { // If running as root
        chown($backupDir, 'root');
        chgrp($backupDir, 'www-data');
        chmod($backupDir, 0775);
    }
}

// Verify write permissions through group access
if (!is_writable($backupDir)) {
    // Debug information
    $owner = posix_getpwuid(fileowner($backupDir))['name'] ?? 'unknown';
    $group = posix_getgrgid(filegroup($backupDir))['name'] ?? 'unknown';
    
    echo json_encode([
        'success' => false,
        'message' => "Cannot write to backup directory ($backupDir)",
        'permissions' => substr(sprintf('%o', fileperms($backupDir)), -4),
        'owner' => $owner,
        'group' => $group,
        'process_user' => posix_getpwuid(posix_geteuid())['name'] ?? 'unknown',
        'suggested_fix' => 'Run: sudo chown root:www-data ' . $backupDir . ' && sudo chmod 775 ' . $backupDir
    ]);
    exit;
}

// Backup file name with timestamp
$backupFile = 'dereja_me_system_backup_' . date('Ymd_His') . '.sql';
$backupFilePath = "$backupDir/$backupFile";

// Verify database connection first
try {
    $mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    if ($mysqli->connect_error) {
        throw new Exception("Connection failed: " . $mysqli->connect_error);
    }
    $mysqli->close();
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    exit;
}

// Get full path to mysqldump
$mysqldumpPath = trim(shell_exec('which mysqldump'));
if (empty($mysqldumpPath)) {
    echo json_encode(['success' => false, 'message' => 'mysqldump not found in PATH']);
    exit;
}

// Backup the database with detailed error reporting
$command = "$mysqldumpPath --host=$dbHost --user=$dbUser --password='$dbPassword' $dbName > $backupFilePath 2>&1";
exec($command, $output, $return_var);

// Debugging output
error_log("Backup Command: $command");
error_log("Return Code: $return_var");
error_log("Command Output: " . implode("\n", $output));

if ($return_var === 0) {
    // Verify backup file was created and has content
    if (!file_exists($backupFilePath)) {
        echo json_encode([
            'success' => false, 
            'message' => 'Backup file not created',
            'debug' => ['command' => $command, 'output' => $output]
        ]);
        exit;
    }
    
    if (filesize($backupFilePath) === 0) {
        unlink($backupFilePath);
        echo json_encode([
            'success' => false, 
            'message' => 'Backup file is empty',
            'debug' => ['command' => $command, 'output' => $output]
        ]);
        exit;
    }

    $backupDetails = [
        'name' => $backupFile,
        'date' => date('Y-m-d H:i:s', filemtime($backupFilePath)),
        'size' => filesize($backupFilePath),
        'path' => $backupFilePath
    ];

    echo json_encode(['success' => true, 'newBackup' => $backupDetails, 'redirect' => 'main.php']);
} else {
    $error = implode("\n", $output);
    error_log("Backup failed: " . $error);
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => "Backup failed",
        'error' => $error,
        'debug' => [
            'command' => $command,
            'return_var' => $return_var,
            'output' => $output,
            'mysqldump_path' => $mysqldumpPath,
            'pwd' => shell_exec('pwd'),
            'whoami' => shell_exec('whoami'),
            'env' => shell_exec('env')
        ]
    ]);
}
?>