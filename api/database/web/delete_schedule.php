<?php
$hardcodedPassword = 'me@dereja';

header('Content-Type: application/json');

if (!isset($_POST['password']) || $_POST['password'] !== $hardcodedPassword) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
    exit;
}

// Database connection
$dbHost = '192.168.160.50';
$dbUser = 'me_dereja';
$dbPassword = 'me_dereja';
$dbName = 'me_dereja';

$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($mysqli->connect_error) {
    die(json_encode(['success' => false, 'message' => "Connection failed: " . $mysqli->connect_error]));
}

// Deactivate all schedules
if ($mysqli->query("UPDATE backup_schedule SET is_active = FALSE")) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => $mysqli->error]);
}

$mysqli->close();
?>