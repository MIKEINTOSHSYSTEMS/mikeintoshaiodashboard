<?php
function dbbackupfiles($directory, $sort_by = 'name', $order = 'asc') {
    // Check if the specified path is a directory
    if (is_dir($directory)) {
        // Scan the directory and get the list of files and directories
        $items = scandir($directory);
        
        // Filter out the '.' and '..' entries
        $items = array_diff($items, array('.', '..'));

        // Create an array to hold the sorted items
        $sorted_items = array();
        foreach ($items as $item) {
            $path = $directory . DIRECTORY_SEPARATOR . $item;
            $sorted_items[] = array(
                'name' => $item,
                'path' => $path,
                'is_dir' => is_dir($path),
                'modified' => filemtime($path)
            );
        }
                // Filter out the '.' and '..' entries
        $items = array_diff($items, array('.', '..'));

        // Create an array to hold the sorted items
        $sorted_items = array();
        foreach ($items as $item) {
            $path = $directory . DIRECTORY_SEPARATOR . $item;
            // Exclude .php and .txt files
            if (!in_array(strtolower(pathinfo($item, PATHINFO_EXTENSION)), ['php', 'txt'])) {
                $sorted_items[] = array(
                    'name' => $item,
                    'path' => $path,
                    'is_dir' => is_dir($path),
                    'modified' => filemtime($path)
                );
            }
        }

        // Sort the items based on the specified criteria
        usort($sorted_items, function($a, $b) use ($sort_by, $order) {
            if ($sort_by == 'name') {
                return $order == 'asc' ? strcasecmp($a['name'], $b['name']) : strcasecmp($b['name'], $a['name']);
            } elseif ($sort_by == 'date') {
                return $order == 'asc' ? $a['modified'] - $b['modified'] : $b['modified'] - $a['modified'];
            }
            return 0;
        });

        // Output the list of files and directories in a table
        echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; width: 100%;'>";
        echo "<thead>";
        echo "<tr>";
        
        // Determine the next sort order for each column
        $name_order = ($sort_by == 'name' && $order == 'asc') ? 'desc' : 'asc';
        $date_order = ($sort_by == 'date' && $order == 'asc') ? 'desc' : 'asc';
        
        echo "<th><a href=\"?dir=" . urlencode($directory) . "&sort_by=name&order=$name_order\">Name</a></th>";
        echo "<th><a href=\"?dir=" . urlencode($directory) . "&sort_by=date&order=$date_order\">Modified Date</a></th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($sorted_items as $item) {
            $modified_date = date("Y-m-d H:i:s", $item['modified']);
            echo "<tr>";
            if ($item['is_dir']) {
                // If the item is a directory, make it clickable and call the function recursively
                echo "<td><a href=\"?dir=" . urlencode($item['path']) . "&sort_by=$sort_by&order=$order\">" . htmlspecialchars($item['name']) . "</a></td>";
            } else {
                // If the item is a file, make it downloadable
                echo "<td><a href=\"?download=" . urlencode($item['path']) . "\">" . htmlspecialchars($item['name']) . "</a></td>";
            }
            echo "<td>$modified_date</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "The specified path is not a directory.";
    }
}

// Handle file download
if (isset($_GET['download'])) {
    $file = urldecode($_GET['download']);
    if (file_exists($file) && is_file($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    } else {
        echo "File not found.";
    }
}

// Get the directory path from the query parameter, default to the current directory
$directory = isset($_GET['dir']) ? $_GET['dir'] : '.';
$sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'name';
$order = isset($_GET['order']) ? $_GET['order'] : 'asc';

// Display sorting options
echo "<h2>List of Database: " . htmlspecialchars($directory) . "</h2>";
echo "<div style='margin-bottom: 20px;'>";
echo "<a href=\"?dir=" . urlencode($directory) . "&sort_by=name&order=$name_order\" style='margin-right: 10px;'>Sort by Name</a> | ";
echo "<a href=\"?dir=" . urlencode($directory) . "&sort_by=date&order=$date_order\" style='margin-right: 10px;'>Sort by Date</a>";
echo "</div>";

// Display the list of files and directories
dbbackupfiles($directory, $sort_by, $order);
?>