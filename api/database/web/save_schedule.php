<?php
$hardcodedPassword = 'me@dereja';

header('Content-Type: application/json');

// Get the raw POST data
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (!isset($data['password']) || $data['password'] !== $hardcodedPassword) {
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

// First, deactivate any existing schedules
$mysqli->query("UPDATE backup_schedule SET is_active = FALSE");

// Insert new schedule with retention settings
$stmt = $mysqli->prepare("INSERT INTO backup_schedule 
    (schedule_type, minute_interval, daily_time, weekly_day, weekly_time, 
     max_backups, retention_days, min_keep_backups, is_active) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, TRUE)");

$minuteInterval = $data['schedule_type'] === 'minute' ? (int)$data['minute_interval'] : null;
$dailyTime = $data['schedule_type'] === 'daily' ? $data['daily_time'] : null;
$weeklyDay = $data['schedule_type'] === 'weekly' ? $data['weekly_day'] : null;
$weeklyTime = $data['schedule_type'] === 'weekly' ? $data['weekly_time'] : null;

$maxBackups = isset($data['max_backups']) ? (int)$data['max_backups'] : 10;
$retentionDays = isset($data['retention_days']) ? (int)$data['retention_days'] : 30;
$minKeepBackups = isset($data['min_keep_backups']) ? (int)$data['min_keep_backups'] : 2;

$stmt->bind_param("sisssiii", 
    $data['schedule_type'],
    $minuteInterval,
    $dailyTime,
    $weeklyDay,
    $weeklyTime,
    $maxBackups,
    $retentionDays,
    $minKeepBackups
);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => $mysqli->error]);
}

$stmt->close();
$mysqli->close();
?>