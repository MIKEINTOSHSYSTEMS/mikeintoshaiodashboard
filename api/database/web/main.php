<?php
// Database connection details
$backupDir = './backup';
$backupFiles = array_diff(scandir($backupDir), array('.', '..'));

$backups = [];
foreach ($backupFiles as $file) {
    $filePath = "$backupDir/$file";
    $backups[] = [
        'name' => $file,
        'date' => filemtime($filePath),
        'size' => filesize($filePath)
    ];
}

// Sorting
$sortField = isset($_GET['sort']) ? $_GET['sort'] : 'date';
$sortOrder = isset($_GET['order']) ? $_GET['order'] : 'desc';

usort($backups, function ($a, $b) use ($sortField, $sortOrder) {
    $cmp = 0;
    if ($sortField == 'name') {
        $cmp = strcmp($a['name'], $b['name']);
    } elseif ($sortField == 'date') {
        $cmp = $a['date'] - $b['date'];
    } elseif ($sortField == 'size') {
        $cmp = $a['size'] - $b['size'];
    }
    return $sortOrder == 'asc' ? $cmp : -$cmp;
});

// Pagination
$perPageOptions = [5, 10, 15, 20, 50, 100, -1]; // -1 means "All"
$defaultPerPage = 5;
$perPage = isset($_GET['perPage']) ? (int)$_GET['perPage'] : $defaultPerPage;
if (!in_array($perPage, $perPageOptions)) {
    $perPage = $defaultPerPage;
}

$totalBackups = count($backups);
$totalPages = ($perPage > 0) ? ceil($totalBackups / $perPage) : 1;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, min($currentPage, $totalPages));
$offset = ($currentPage - 1) * $perPage;
$pagedBackups = ($perPage > 0) ? array_slice($backups, $offset, $perPage) : $backups;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dereja M&E System Database Backups</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3a79db;
            --secondary-color: #6c757d;
            --danger-color: #e8491d;
            --success-color: #4caf50;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .navbar {
            background: linear-gradient(135deg, #ff0007, #ffc107);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 0.8rem 1rem;
        }
        
        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            margin-right: 10px;
            font-size: 1.8rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-danger {
            background-color: var(--danger-color);
            border-color: var(--danger-color);
        }
        
        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            font-weight: 600;
            padding: 1rem 1.25rem;
        }
        
        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
            border-top: none;
        }
        
        .table th a {
            color: var(--dark-bg);
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .table th a:hover {
            color: var(--primary-color);
        }
        
        .table td {
            vertical-align: middle;
        }
        
        .actions a {
            margin: 0 5px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        .actions a:hover {
            text-decoration: underline;
        }
        
        .progress-container {
            height: 30px;
            border-radius: 15px;
            overflow: hidden;
            background-color: #e9ecef;
            margin-bottom: 20px;
        }
        
        .progress-bar {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            transition: width 0.6s ease;
        }
        
        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .pagination .page-link {
            color: var(--primary-color);
        }
        
        .modal-content {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
        
        .modal-header {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .modal-footer {
            border-top: none;
        }
        
        .form-check-label {
            margin-left: 5px;
        }
        
        .form-control, .form-select {
            border-radius: 5px;
            padding: 0.5rem 0.75rem;
        }
        
        .retention-settings {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
        }
        
        .per-page-selector {
            max-width: 120px;
        }
        
        .select-all-checkbox {
            margin-right: 10px;
        }
        
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.2rem;
            }
            
            .table th, .table td {
                padding: 0.75rem 0.5rem;
            }
            
            .actions a {
                display: block;
                margin: 5px 0;
            }
            
            .modal-dialog {
                margin: 10px;
            }
        }
        
        /* Custom checkbox styling */
        .form-check-input {
            width: 1.2em;
            height: 1.2em;
            margin-right: 8px;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-database"></i> Dereja M&E System Backups
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button id="uploadButton" class="btn btn-info ms-2">
                            <i class="fas fa-upload"></i> Upload Backup
                        </button>
                    </li>                    
                    <li class="nav-item">
                        <button id="backupButton" class="btn btn-success ms-2">
                            <i class="fas fa-plus-circle"></i> Backup Now
                        </button>
                    </li>
                    <li class="nav-item">
                        <button id="scheduleButton" class="btn btn-primary ms-2">
                            <i class="fas fa-clock"></i> Schedule
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="progress-container" id="progressContainer" style="display: none;">
            <div class="progress-bar bg-primary" id="progressBar" style="width: 0%">0%</div>
        </div>
        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Backup Details</h5>
                <div class="d-flex align-items-center">
                    <span class="badge bg-primary rounded-pill me-3"><?php echo $totalBackups; ?> backups</span>
                    <form class="d-flex" method="get" action="">
                        <input type="hidden" name="sort" value="<?php echo htmlspecialchars($sortField); ?>">
                        <input type="hidden" name="order" value="<?php echo htmlspecialchars($sortOrder); ?>">
                        <label for="perPage" class="me-2 my-auto">Show:</label>
                        <select name="perPage" id="perPage" class="form-select per-page-selector" onchange="this.form.submit()">
                            <?php foreach ($perPageOptions as $option): ?>
                                <option value="<?php echo $option; ?>" <?php echo $perPage == $option ? 'selected' : ''; ?>>
                                    <?php echo $option == -1 ? 'All' : $option; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <form id="bulkActionForm" method="post" action="bulk_action.php">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 40px;">
                                        <input type="checkbox" id="selectAll" class="form-check-input select-all-checkbox">
                                    </th>
                                    <th><a href="?sort=name&order=<?php echo $sortOrder == 'asc' ? 'desc' : 'asc'; ?>&perPage=<?php echo $perPage; ?>" class="text-decoration-none">
                                        Backup Name <i class="fas fa-sort"></i>
                                    </a></th>
                                    <th><a href="?sort=date&order=<?php echo $sortOrder == 'asc' ? 'desc' : 'asc'; ?>&perPage=<?php echo $perPage; ?>" class="text-decoration-none">
                                        Date <i class="fas fa-sort"></i>
                                    </a></th>
                                    <th><a href="?sort=size&order=<?php echo $sortOrder == 'asc' ? 'desc' : 'asc'; ?>&perPage=<?php echo $perPage; ?>" class="text-decoration-none">
                                        Size <i class="fas fa-sort"></i>
                                    </a></th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="backupTable">
                                <?php foreach ($pagedBackups as $backup): ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="backups[]" value="<?php echo htmlspecialchars($backup['name']); ?>" class="form-check-input backup-checkbox">
                                    </td>
                                    <td><?php echo htmlspecialchars($backup['name']); ?></td>
                                    <td><?php echo date('Y-m-d H:i:s', $backup['date']); ?></td>
                                    <td><?php echo round($backup['size'] / 1024, 2); ?> KB</td>
                                    <td class="actions">
                                        <a href="#" onclick="return confirmRestoreWithPassword('<?php echo urlencode($backup['name']); ?>')">
                                            <i class="fas fa-undo"></i> Restore
                                        </a>
                                        <a href="<?php echo $backupDir . '/' . urlencode($backup['name']); ?>" download onclick="return confirmDownload()">
                                            <i class="fas fa-download"></i> Download
                                        </a>
                                        <a href="#" onclick="return confirmDeleteSingle('<?php echo urlencode($backup['name']); ?>')" class="text-danger">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <button type="submit" name="action" value="delete" class="btn btn-danger" onclick="return confirmDeleteWithPassword();">
                            <i class="fas fa-trash-alt"></i> Delete Selected
                        </button>
                        <div class="form-text">
                            <span id="selectedCount">0</span> selected
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php if ($perPage > 0 && $totalPages > 1): ?>
        <nav aria-label="Backup pagination" class="mt-3">
            <ul class="pagination justify-content-center">
                <?php if ($currentPage > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>&perPage=<?php echo $perPage; ?>">
                        &laquo; Previous
                    </a>
                </li>
                <?php endif; ?>
                
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php echo $i == $currentPage ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>&perPage=<?php echo $perPage; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
                <?php endfor; ?>
                
                <?php if ($currentPage < $totalPages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>&sort=<?php echo $sortField; ?>&order=<?php echo $sortOrder; ?>&perPage=<?php echo $perPage; ?>">
                        Next &raquo;
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <?php endif; ?>

        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Cron Job Setup</h5>
            </div>
            <div class="card-body">
                <p>Add this command to your cron jobs to run every minute:</p>
                <div class="alert alert-secondary">
                    <code>cd /home/me.dereja.com/public_html/api/database/web/ && /usr/bin/php check_schedule.php >> cron.log 2>&1</code>
                </div>
                <p class="mb-1"><strong>Cron schedule:</strong></p>
                <table class="table table-bordered table-sm w-auto">
                    <tr>
                        <th>Minute</th>
                        <th>Hour</th>
                        <th>Day of Month</th>
                        <th>Month</th>
                        <th>Day of Week</th>
                    </tr>
                    <tr>
                        <td>*</td>
                        <td>*</td>
                        <td>*</td>
                        <td>*</td>
                        <td>*</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- Schedule Modal -->
    <div class="modal fade" id="scheduleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Schedule Backups</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="scheduleForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Schedule Type</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="schedule_type" id="scheduleMinute" value="minute" checked>
                                <label class="form-check-label" for="scheduleMinute">
                                    Every <input type="number" name="minute_interval" min="1" max="60" value="30" class="form-control d-inline-block" style="width: 80px;"> minutes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="schedule_type" id="scheduleHourly" value="hourly">
                                <label class="form-check-label" for="scheduleHourly">
                                    Hourly
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="schedule_type" id="scheduleDaily" value="daily">
                                <label class="form-check-label" for="scheduleDaily">
                                    Daily at <input type="time" name="daily_time" value="00:00" class="form-control d-inline-block" style="width: 120px;" disabled>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="schedule_type" id="scheduleWeekly" value="weekly">
                                <label class="form-check-label" for="scheduleWeekly">
                                    Weekly on 
                                    <select name="weekly_day" class="form-select d-inline-block" style="width: 120px;" disabled>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                    at <input type="time" name="weekly_time" value="00:00" class="form-control d-inline-block" style="width: 120px;" disabled>
                                </label>
                            </div>
                        </div>

                        <div class="retention-settings">
                            <h6>Retention Settings</h6>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Max backups to keep</label>
                                    <input type="number" name="max_backups" min="1" value="<?php echo isset($schedule['max_backups']) ? $schedule['max_backups'] : 30; ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Keep backups for (days)</label>
                                    <input type="number" name="retention_days" min="1" value="<?php echo isset($schedule['retention_days']) ? $schedule['retention_days'] : 60; ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Always keep at least</label>
                                    <input type="number" name="min_keep_backups" min="1" value="<?php echo isset($schedule['min_keep_backups']) ? $schedule['min_keep_backups'] : 9; ?>" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div id="currentSchedule" class="mt-4 pt-3 border-top">
                            <h6>Current Schedule</h6>
                            <?php if ($schedule): ?>
                                <div class="alert alert-info">
                                    <?php echo formatSchedule($schedule); ?>
                                    <button type="button" onclick="deleteSchedule()" class="btn btn-sm btn-danger float-end">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-warning">No active schedule</div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Upload Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload Database Backup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="uploadForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="backupFile" class="form-label">Select backup file (.sql or .gz)</label>
                            <input class="form-control" type="file" id="backupFile" name="backupFile" accept=".sql,.gz" required>
                            <div class="form-text">Maximum file size: 100MB</div>
                        </div>
                        <div class="progress-container mt-3" id="uploadProgressContainer" style="display: none;">
                            <div class="progress-bar bg-info" id="uploadProgressBar" style="width: 0%">0%</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
function getCurrentSchedule() {
    // Database connection
    $dbHost = '192.168.160.50';
    $dbUser = 'me_dereja';
    $dbPassword = 'me_dereja';
    $dbName = 'me_dereja';

    $mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($mysqli->connect_error) {
        return false;
    }

    $result = $mysqli->query("SELECT * FROM backup_schedule WHERE is_active = TRUE ORDER BY created_at DESC LIMIT 1");
    $schedule = $result->num_rows > 0 ? $result->fetch_assoc() : false;
    
    $mysqli->close();
    return $schedule;
}

function formatSchedule($schedule) {
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
    
    // Add retention info
    $scheduleText .= "<br><small>Retention: ";
    $retentionParts = [];
    if ($schedule['max_backups'] > 0) {
        $retentionParts[] = "Max {$schedule['max_backups']} backups";
    }
    if ($schedule['retention_days'] > 0) {
        $retentionParts[] = "Keep {$schedule['retention_days']} days";
    }
    $retentionParts[] = "Always keep {$schedule['min_keep_backups']}";
    
    $scheduleText .= implode(", ", $retentionParts) . "</small>";
    
    return $scheduleText;
}
?>

<script>
    // Confirm dialogs
    function confirmDownload() {
        return confirm('Are you sure you want to download this backup?');
    }

    function confirmRestore() {
        return confirm('Are you sure you want to restore this backup?');
    }

    function confirmDeleteSingle(backupFile) {
        if (confirm('Are you sure you want to DELETE this backup?')) {
            const password = prompt("Please enter your password to proceed with deleting the backup:");
            if (!password) return false;

            const form = document.createElement('form');
            form.method = 'post';
            form.action = 'bulk_action.php';
            
            const fileInput = document.createElement('input');
            fileInput.type = 'hidden';
            fileInput.name = 'backups[]';
            fileInput.value = decodeURIComponent(backupFile);
            form.appendChild(fileInput);
            
            const actionInput = document.createElement('input');
            actionInput.type = 'hidden';
            actionInput.name = 'action';
            actionInput.value = 'delete';
            form.appendChild(actionInput);
            
            const passwordInput = document.createElement('input');
            passwordInput.type = 'hidden';
            passwordInput.name = 'password';
            passwordInput.value = password;
            form.appendChild(passwordInput);
            
            document.body.appendChild(form);
            form.submit();
            return true;
        }
        return false;
    }

    function confirmDeleteWithPassword() {
        const checkedBoxes = document.querySelectorAll('.backup-checkbox:checked');
        if (checkedBoxes.length === 0) {
            alert('Please select at least one backup to delete.');
            return false;
        }

        if (!confirm('Are you sure you want to DELETE the selected backups?')) {
            return false;
        }

        const password = prompt("Please enter your password to proceed with deleting the selected backups:");
        if (!password) return false;

        const form = document.getElementById('bulkActionForm');
        const passwordInput = document.createElement('input');
        passwordInput.type = 'hidden';
        passwordInput.name = 'password';
        passwordInput.value = password;
        form.appendChild(passwordInput);

        return true;
    }

    function confirmRestoreWithPassword(backupFile) {
        const password = prompt("Please enter your password to proceed with restoring the backup:");
        if (!password) return false;

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'restore.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            const response = JSON.parse(xhr.responseText);
            if (xhr.status === 200 && response.success) {
                alert('Backup restored successfully: ' + backupFile);
                window.location.reload();
            } else {
                alert('Failed to restore backup: ' + response.message);
            }
        };
        xhr.onerror = function() {
            alert('Error occurred while restoring the backup.');
        };
        xhr.send('file=' + encodeURIComponent(backupFile) + '&password=' + encodeURIComponent(password));
        return false;
    }

    // Backup button functionality
    document.getElementById('backupButton').addEventListener('click', function() {
        const password = prompt("Please enter your password to proceed:");
        if (!password) return;

        const progressBar = document.getElementById('progressBar');
        const progressContainer = document.getElementById('progressContainer');

        progressContainer.style.display = 'block';
        progressBar.style.width = '0%';
        progressBar.textContent = 'Starting backup...';

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'backup.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    progressBar.style.width = '100%';
                    progressBar.textContent = 'Backup completed';
                    progressBar.style.backgroundColor = '#4caf50';

                    // Update the backup list
                    const newBackup = response.newBackup;
                    const backupTable = document.getElementById('backupTable');

                    const rowHTML = `
                        <tr>
                            <td>
                                <input type="checkbox" name="backups[]" value="${newBackup.name}" class="form-check-input backup-checkbox">
                            </td>
                            <td>${newBackup.name}</td>
                            <td>${newBackup.date}</td>
                            <td>${(newBackup.size / 1024).toFixed(2)} KB</td>
                            <td class="actions">
                                <a href="#" onclick="return confirmRestoreWithPassword('${encodeURIComponent(newBackup.name)}')">
                                    <i class="fas fa-undo"></i> Restore
                                </a>
                                <a href="${newBackup.path}" download onclick="return confirmDownload()">
                                    <i class="fas fa-download"></i> Download
                                </a>
                                <a href="#" onclick="return confirmDeleteSingle('${encodeURIComponent(newBackup.name)}')" class="text-danger">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>`;
                backupTable.insertAdjacentHTML('afterbegin', rowHTML);

                // Redirect to index.php
                setTimeout(() => {
                    window.location.href = response.redirect;
                }, 2000); // Delay for UI update
            } else {
                progressBar.style.width = '100%';
                progressBar.textContent = 'Backup failed';
                progressBar.style.backgroundColor = '#f44336';
            }
            setTimeout(() => {
                progressContainer.style.display = 'none';
            }, 2000);
        } else {
            progressBar.style.width = '100%';
            progressBar.textContent = 'Backup failed';
            progressBar.style.backgroundColor = '#f44336';
            setTimeout(() => {
                progressContainer.style.display = 'none';
            }, 2000);
        }
    };
    xhr.onerror = function () {
        progressBar.style.width = '100%';
        progressBar.textContent = 'Backup failed';
        progressBar.style.backgroundColor = '#f44336';
        setTimeout(() => {
            progressContainer.style.display = 'none';
        }, 2000);
    };
    xhr.send('password=' + encodeURIComponent(password));
});

    // Schedule modal functionality
    const scheduleModal = new bootstrap.Modal(document.getElementById('scheduleModal'));
    
    document.getElementById('scheduleButton').addEventListener('click', function() {
        scheduleModal.show();
    });

    // Enable/disable fields based on schedule type selection
    document.querySelectorAll('input[name="schedule_type"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const minuteInterval = document.querySelector('input[name="minute_interval"]');
            const dailyTime = document.querySelector('input[name="daily_time"]');
            const weeklyDay = document.querySelector('select[name="weekly_day"]');
            const weeklyTime = document.querySelector('input[name="weekly_time"]');
            
            minuteInterval.disabled = this.value !== 'minute';
            dailyTime.disabled = this.value !== 'daily';
            weeklyDay.disabled = this.value !== 'weekly';
            weeklyTime.disabled = this.value !== 'weekly';
        });
    });

    // Handle form submission
    document.getElementById('scheduleForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const data = Object.fromEntries(formData.entries());
        
        const password = prompt("Please enter your password to set the backup schedule:");
        if (!password) return;
        
        data.password = password;
        
        fetch('save_schedule.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Schedule saved successfully!');
                scheduleModal.hide();
                updateScheduleDisplay();
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while saving the schedule.');
        });
    });

    function deleteSchedule() {
        if (!confirm('Are you sure you want to delete the current backup schedule?')) return;
        
        const password = prompt("Please enter your password to delete the backup schedule:");
        if (!password) return;
        
        fetch('delete_schedule.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ password: password })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Schedule deleted successfully!');
                updateScheduleDisplay();
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while deleting the schedule.');
        });
    }

    // Update the schedule display
    function updateScheduleDisplay() {
        fetch('get_schedule.php')
            .then(response => response.json())
            .then(data => {
                const scheduleContainer = document.getElementById('currentSchedule');
                if (data.success) {
                    scheduleContainer.innerHTML = `
                        <h6>Current Schedule</h6>
                        <div class="alert alert-info">
                            ${data.schedule.display_text}
                            <button type="button" onclick="deleteSchedule()" class="btn btn-sm btn-danger float-end">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </div>`;
                } else {
                    scheduleContainer.innerHTML = `
                        <h6>Current Schedule</h6>
                        <div class="alert alert-warning">No active schedule</div>`;
                }
            });
    }

    // Select all functionality
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.backup-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateSelectedCount();
    });

    // Update selected count when checkboxes change
    function updateSelectedCount() {
        const selectedCount = document.querySelectorAll('.backup-checkbox:checked').length;
        document.getElementById('selectedCount').textContent = selectedCount;
    }

    // Add event listeners to all checkboxes
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.backup-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedCount);
        });
        
        updateScheduleDisplay();
        
        // Initialize the first radio button as checked and enable its fields
        const firstRadio = document.querySelector('input[name="schedule_type"]');
        if (firstRadio) {
            firstRadio.checked = true;
            firstRadio.dispatchEvent(new Event('change'));
        }
    });

// Upload functionality
const uploadModal = new bootstrap.Modal(document.getElementById('uploadModal'));

document.getElementById('uploadButton').addEventListener('click', function() {
    uploadModal.show();
});

document.getElementById('uploadForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const fileInput = document.getElementById('backupFile');
    const file = fileInput.files[0];
    
    if (!file) {
        alert('Please select a file to upload');
        return;
    }
    
    // Validate file type
    const validExtensions = ['.sql', '.gz'];
    const fileName = file.name.toLowerCase();
    const isValidFile = validExtensions.some(ext => fileName.endsWith(ext));
    
    if (!isValidFile) {
        alert('Please upload a valid .sql or .gz file');
        return;
    }
    
    // Validate file size (100MB max)
    if (file.size > 100 * 1024 * 1024) {
        alert('File size exceeds 100MB limit');
        return;
    }
    
    const password = prompt("Please enter your password to proceed with the upload:");
    if (!password) return;
    
    const formData = new FormData();
    formData.append('backupFile', file);
    formData.append('password', password);
    
    const progressBar = document.getElementById('uploadProgressBar');
    const progressContainer = document.getElementById('uploadProgressContainer');
    
    progressContainer.style.display = 'block';
    progressBar.style.width = '0%';
    progressBar.textContent = '0%';
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload_backup.php', true);
    
    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
            const percentComplete = Math.round((e.loaded / e.total) * 100);
            progressBar.style.width = percentComplete + '%';
            progressBar.textContent = percentComplete + '%';
        }
    };
    
xhr.onload = function() {
    if (xhr.status === 200) {
        try {
            const response = JSON.parse(xhr.responseText);
            if (response.success) {
                progressBar.style.width = '100%';
                progressBar.textContent = 'Upload complete!';
                progressBar.style.backgroundColor = '#4caf50';
                
                // Show success message to user
                alert(response.message);
                
                setTimeout(() => {
                    uploadModal.hide();
                    window.location.reload();
                }, 1000);
            } else {
                progressBar.style.width = '100%';
                progressBar.textContent = 'Upload failed';
                progressBar.style.backgroundColor = '#f44336';
                alert('Error: ' + response.message);
            }
        } catch (e) {
            progressBar.style.width = '100%';
            progressBar.textContent = 'Upload failed';
            progressBar.style.backgroundColor = '#f44336';
            alert('Error parsing server response');
        }
    } else {
        progressBar.style.width = '100%';
        progressBar.textContent = 'Upload failed';
        progressBar.style.backgroundColor = '#f44336';
        alert('Error occurred during upload. Status: ' + xhr.status);
    }
};
    xhr.send(formData);
});

</script>
</body>
</html>