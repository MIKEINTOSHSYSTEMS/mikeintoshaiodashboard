<?php
$hardcodedPassword = 'me@dereja';

// Check password
if (!isset($_POST['password']) || $_POST['password'] !== $hardcodedPassword) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
    exit;
}

// Database connection details
$dbHost = '192.168.160.50';
$dbUser = 'me_dereja';
$dbPassword = 'me_dereja';
$dbName = 'me_derejaforms';
$backupDir = './backup';

// Validate input
if (!isset($_POST['file'])) {
    echo json_encode(['success' => false, 'message' => 'No file specified.']);
    exit;
}

$backupFile = basename($_POST['file']);
$backupFilePath = "$backupDir/$backupFile";

if (!file_exists($backupFilePath)) {
    echo json_encode(['success' => false, 'message' => 'Backup file does not exist.']);
    exit;
}

try {
    // Create connection
    $mysqli = new mysqli($dbHost, $dbUser, $dbPassword);
    
    // Drop and recreate database
    $mysqli->query("SET FOREIGN_KEY_CHECKS = 0");
    $mysqli->query("DROP DATABASE IF EXISTS $dbName");
    $mysqli->query("CREATE DATABASE $dbName CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $mysqli->query("SET FOREIGN_KEY_CHECKS = 1");
    $mysqli->select_db($dbName);
    
    // Process SQL file in chunks
    $handle = fopen($backupFilePath, 'r');
    $query = '';
    
    while (!feof($handle)) {
        $line = fgets($handle);
        
        // Skip comments and empty lines
        if (trim($line) === '' || strpos($line, '--') === 0 || strpos($line, '/*') === 0) {
            continue;
        }
        
        $query .= $line;
        
        // If we have a complete query (ends with ;)
        if (substr(trim($line), -1) === ';') {
            try {
                if (!$mysqli->query($query)) {
                    throw new Exception("Query failed: " . $mysqli->error . "\nQuery: " . $query);
                }
            } catch (Exception $e) {
                // Log error but continue with next query
                error_log($e->getMessage());
            }
            $query = '';
        }
    }
    
    fclose($handle);
    
    echo json_encode(['success' => true, 'message' => "Backup restored: $backupFilePath"]);
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
} finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}
?>