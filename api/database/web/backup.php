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
$backupDir = './backup';
if (!is_dir($backupDir)) {
    mkdir($backupDir, 0777, true); // Create directory if it doesn't exist
}

// Backup file name with timestamp
$backupFile = 'dereja_me_system_backup_' . date('Ymd_His') . '.sql';
$backupFilePath = "$backupDir/$backupFile";

// Create a connection
$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Backup the database
$command = "mysqldump --host=$dbHost --user=$dbUser --password='$dbPassword' $dbName > $backupFilePath";
system($command, $return_var);

if ($return_var === 0) {
$backupDetails = [
    'name' => $backupFile,
    'date' => date('Y-m-d H:i:s', filemtime($backupFilePath)),
    'size' => filesize($backupFilePath),
    'path' => $backupFilePath
];

//if ($return_var === 0) {
    //echo json_encode(['success' => true, 'newBackup' => $backupDetails]);
    echo json_encode(['success' => true, 'newBackup' => $backupDetails, 'redirect' => 'main.php']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error creating backup.']);
}

$mysqli->close();
?>