<?php
// Database connection
$dbHost = '192.168.160.50';
$dbUser = 'me_dereja';
$dbPassword = 'me_dereja';
$dbName = 'me_derejaforms';

header('Content-Type: application/json');

$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($mysqli->connect_error) {
    die(json_encode([
        'success' => false, 
        'message' => "Connection failed: " . $mysqli->connect_error
    ]));
}

$result = $mysqli->query("SELECT * FROM backup_schedule WHERE is_active = TRUE ORDER BY created_at DESC LIMIT 1");

if ($result->num_rows > 0) {
    $schedule = $result->fetch_assoc();
    
    // Format the response with all schedule data including retention settings
    $response = [
        'success' => true,
        'schedule' => [
            'id' => $schedule['id'],
            'schedule_type' => $schedule['schedule_type'],
            'minute_interval' => $schedule['minute_interval'],
            'daily_time' => $schedule['daily_time'],
            'weekly_day' => $schedule['weekly_day'],
            'weekly_time' => $schedule['weekly_time'],
            'max_backups' => $schedule['max_backups'],
            'retention_days' => $schedule['retention_days'],
            'min_keep_backups' => $schedule['min_keep_backups'],
            'created_at' => $schedule['created_at']
        ]
    ];
    
    // Format the display text
    $scheduleText = "";
    switch ($schedule['schedule_type']) {
        case 'minute':
            $scheduleText = "Every {$schedule['minute_interval']} minutes";
            break;
        case 'hourly':
            $scheduleText = "Every hour";
            break;
        case 'daily':
            $scheduleText = "Daily at " . date('H:i', strtotime($schedule['daily_time']));
            break;
        case 'weekly':
            $scheduleText = "Weekly on {$schedule['weekly_day']} at " . date('H:i', strtotime($schedule['weekly_time']));
            break;
    }
    
    // Add retention info to display text
    $scheduleText .= "<br>Retention: ";
    $retentionParts = [];
    if ($schedule['max_backups'] > 0) {
        $retentionParts[] = "Max {$schedule['max_backups']} backups";
    }
    if ($schedule['retention_days'] > 0) {
        $retentionParts[] = "Keep {$schedule['retention_days']} days";
    }
    $retentionParts[] = "Always keep {$schedule['min_keep_backups']}";
    
    $scheduleText .= implode(", ", $retentionParts);
    $response['schedule']['display_text'] = $scheduleText;
    
    echo json_encode($response);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'No active schedule found'
    ]);
}

$mysqli->close();
?>