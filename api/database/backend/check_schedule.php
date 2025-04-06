<?php
// Configuration - these will be overridden by database settings if they exist
$defaultConfig = [
    'max_backups' => 30,
    'retention_days' => 60,
    'min_keep_backups' => 9
];

// Set the script directory
$scriptDir = __DIR__;
$backupDir = "$scriptDir/backup";

// Enable detailed logging
file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Script started\n", FILE_APPEND);

// Enable error logging
ini_set('log_errors', 1);
ini_set('error_log', "$scriptDir/cron_error.log");
ini_set('display_errors', 0);

// Database connection details
$dbHost = '192.168.160.50';
$dbUser = 'me_dereja';
$dbPassword = 'me_dereja';
$dbName = 'me_derejaforms';

// Connect to database
file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Attempting database connection\n", FILE_APPEND);
$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($mysqli->connect_error) {
    $errorMsg = date('Y-m-d H:i:s')." - DB Connection failed: ".$mysqli->connect_error."\n";
    file_put_contents("$scriptDir/cron_error.log", $errorMsg, FILE_APPEND);
    exit(1);
}
file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Database connection successful\n", FILE_APPEND);

// Get active schedule
file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Checking for active schedules\n", FILE_APPEND);
$result = $mysqli->query("SELECT * FROM backup_schedule WHERE is_active = TRUE ORDER BY created_at DESC LIMIT 1");

if ($result->num_rows === 0) {
    file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - No active schedule found\n", FILE_APPEND);
    $mysqli->close();
    exit;
}

$schedule = $result->fetch_assoc();
file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Active schedule: ".print_r($schedule, true)."\n", FILE_APPEND);

// Apply retention settings from database or use defaults
$retentionConfig = [
    'max_backups' => isset($schedule['max_backups']) ? (int)$schedule['max_backups'] : $defaultConfig['max_backups'],
    'retention_days' => isset($schedule['retention_days']) ? (int)$schedule['retention_days'] : $defaultConfig['retention_days'],
    'min_keep_backups' => isset($schedule['min_keep_backups']) ? (int)$schedule['min_keep_backups'] : $defaultConfig['min_keep_backups']
];

file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Retention config: ".print_r($retentionConfig, true)."\n", FILE_APPEND);

$shouldBackup = false;
$now = time();
file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Current time: ".date('Y-m-d H:i:s', $now)."\n", FILE_APPEND);

switch ($schedule['schedule_type']) {
    case 'minute':
        $lastBackupFile = "$scriptDir/last_backup.txt";
        $lastBackupTime = file_exists($lastBackupFile) ? (int)file_get_contents($lastBackupFile) : 0;
        $interval = $schedule['minute_interval'] * 60;
        $shouldBackup = ($now - $lastBackupTime) >= $interval;
        
        file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Minute check: Last backup ".date('Y-m-d H:i:s', $lastBackupTime).", Interval: $interval seconds, Should backup: ".($shouldBackup ? 'YES' : 'NO')."\n", FILE_APPEND);
        break;
        
    case 'hourly':
        $lastBackupFile = "$scriptDir/last_backup_hour.txt";
        $lastBackupHour = file_exists($lastBackupFile) ? (int)file_get_contents($lastBackupFile) : -1;
        $currentHour = (int)date('G');
        $shouldBackup = $currentHour !== $lastBackupHour;
        
        file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Hourly check: Last backup hour $lastBackupHour, Current hour $currentHour, Should backup: ".($shouldBackup ? 'YES' : 'NO')."\n", FILE_APPEND);
        
        if ($shouldBackup) {
            file_put_contents($lastBackupFile, $currentHour);
        }
        break;
        
    case 'daily':
        $lastBackupFile = "$scriptDir/last_backup_day.txt";
        $lastBackupDay = file_exists($lastBackupFile) ? (int)file_get_contents($lastBackupFile) : -1;
        $currentDay = (int)date('z');
        $currentTime = date('H:i');
        $shouldBackup = ($currentDay !== $lastBackupDay) && ($currentTime >= $schedule['daily_time']);
        
        file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Daily check: Last backup day $lastBackupDay, Current day $currentDay, Current time $currentTime, Schedule time {$schedule['daily_time']}, Should backup: ".($shouldBackup ? 'YES' : 'NO')."\n", FILE_APPEND);
        
        if ($shouldBackup) {
            file_put_contents($lastBackupFile, $currentDay);
        }
        break;
        
    case 'weekly':
        $lastBackupFile = "$scriptDir/last_backup_week.txt";
        $lastBackupWeek = file_exists($lastBackupFile) ? (int)file_get_contents($lastBackupFile) : -1;
        $currentWeek = (int)date('W');
        $currentDay = date('l');
        $currentTime = date('H:i');
        $shouldBackup = ($currentWeek !== $lastBackupWeek) && 
                       ($currentDay === $schedule['weekly_day']) && 
                       ($currentTime >= $schedule['weekly_time']);
        
        file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Weekly check: Last backup week $lastBackupWeek, Current week $currentWeek, Current day $currentDay, Current time $currentTime, Schedule day {$schedule['weekly_day']}, Schedule time {$schedule['weekly_time']}, Should backup: ".($shouldBackup ? 'YES' : 'NO')."\n", FILE_APPEND);
        
        if ($shouldBackup) {
            file_put_contents($lastBackupFile, $currentWeek);
        }
        break;
}

if ($shouldBackup) {
    // Perform the backup
    if (!is_dir($backupDir)) {
        file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Creating backup directory\n", FILE_APPEND);
        mkdir($backupDir, 0777, true);
    }
    
    $backupFile = 'dereja_me_system_backup_' . date('Ymd_His') . '.sql';
    $backupFilePath = "$backupDir/$backupFile";
    
    file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Starting backup to $backupFilePath\n", FILE_APPEND);
    
    $command = "mysqldump --host=$dbHost --user=$dbUser --password='$dbPassword' $dbName > $backupFilePath";
    file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Executing: $command\n", FILE_APPEND);
    
    system($command, $return_var);
    
    file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Backup completed with return code: $return_var\n", FILE_APPEND);
    
    if ($return_var === 0) {
        file_put_contents("$scriptDir/last_backup.txt", $now);
        file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Backup successful: $backupFile\n", FILE_APPEND);
        
        // Apply retention policies
        $backupFiles = glob("$backupDir/dereja_me_system_backup_*.sql");
        if (count($backupFiles) > 0) {
            // Sort by modification time (newest first)
            usort($backupFiles, function($a, $b) {
                return filemtime($b) - filemtime($a);
            });
            
            $filesToDelete = [];
            $now = time();
            
            foreach ($backupFiles as $i => $file) {
                $fileTime = filemtime($file);
                $fileAge = ($now - $fileTime) / (60 * 60 * 24); // Age in days
                
                // Apply retention policies
                $shouldDelete = false;
                
                // Count-based retention
                if ($retentionConfig['max_backups'] > 0 && $i >= $retentionConfig['max_backups']) {
                    $shouldDelete = true;
                }
                
                // Time-based retention (only if not in the protected minimum count)
                if ($retentionConfig['retention_days'] > 0 && 
                    $fileAge > $retentionConfig['retention_days'] && 
                    $i >= $retentionConfig['min_keep_backups']) {
                    $shouldDelete = true;
                }
                
                if ($shouldDelete) {
                    $filesToDelete[] = $file;
                }
            }
            
            // Delete files that match retention policies
            foreach ($filesToDelete as $file) {
                if (unlink($file)) {
                    file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Deleted old backup: ".basename($file)."\n", FILE_APPEND);
                } else {
                    file_put_contents("$scriptDir/cron_error.log", date('Y-m-d H:i:s')." - Failed to delete old backup: ".basename($file)."\n", FILE_APPEND);
                }
            }
        }
    } else {
        file_put_contents("$scriptDir/cron_error.log", date('Y-m-d H:i:s')." - Backup failed with code $return_var\n", FILE_APPEND);
    }
} else {
    file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - No backup needed at this time\n", FILE_APPEND);
}

$mysqli->close();
file_put_contents("$scriptDir/cron_debug.log", date('Y-m-d H:i:s')." - Script completed\n", FILE_APPEND);
?>