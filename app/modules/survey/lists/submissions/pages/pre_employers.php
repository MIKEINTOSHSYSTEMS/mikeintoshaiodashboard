<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRE-ASSESSMENT EMPLOYEES' SURVEY Form Submissions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            cursor: pointer;
        }
        .filter-input {
            width: 100%;
            box-sizing: border-box;
            padding: 6px 10px;
            margin-bottom: 10px;
        }
        .export-btn {
            margin-top: 10px;
            padding: 6px 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
        }
        .pagination {
            margin-top: 10px;
        }
        .pagination a {
            cursor: pointer;
            padding: 6px 12px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>PRE-ASSESSMENT EMPLOYEES' SURVEY Form Submissions</h1>

    <?php
    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://derejadev.merqconsultancy.org/backend/forms/api/v1/forms/7/submissions',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'X-Api-Key: BlBh6jVCnHGS9YJnf_wmWCHrXBYiZJ35ehrQtNIk'
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo 'Curl error: ' . curl_error($curl);
        exit;
    }

    curl_close($curl);

    // Decode the JSON response
    $data = json_decode($response, true);

    // Check if decoding was successful
    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
        echo "Error decoding JSON: " . json_last_error_msg();
        exit;
    }

    // Prepare an associative array to hold answers by label
    $answersByLabel = array();

    // Collect all labels and their corresponding answers
    foreach ($data as $submission) {
        foreach ($submission['answers'] as $answer) {
            $label = $answer['label'];
            $answerValue = $answer['answer'];

            // If label already exists, append answer to the array
            if (array_key_exists($label, $answersByLabel)) {
                if (!is_array($answersByLabel[$label])) {
                    $answersByLabel[$label] = array($answersByLabel[$label]);
                }
                $answersByLabel[$label][] = $answerValue;
            } else {
                // Otherwise, initialize a new array with the answer
                $answersByLabel[$label] = $answerValue;
            }
        }
    }

    // Pagination variables
    $totalRows = count($data);
    $rowsPerPage = 10;
    $totalPages = ceil($totalRows / $rowsPerPage);
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($currentPage - 1) * $rowsPerPage;

    // Function to output table rows
    function outputTableRows($answersByLabel, $start, $rowsPerPage) {
        $maxAnswersCount = getMaxAnswersCount($answersByLabel);
        for ($i = $start; $i < min($start + $rowsPerPage, $maxAnswersCount); $i++) {
            echo '<tr>';
            echo '<td><input type="checkbox" name="export[]" value="' . $i . '"></td>';
            foreach ($answersByLabel as $label => $answers) {
                echo '<td>';
                if (is_array($answers)) {
                    echo isset($answers[$i]) ? htmlspecialchars($answers[$i]) : '';
                } else {
                    echo htmlspecialchars($answers);
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    }

    // Function to get maximum number of answers for any label
    function getMaxAnswersCount($answersByLabel) {
        $maxAnswersCount = 0;
        foreach ($answersByLabel as $answers) {
            if (is_array($answers)) {
                $maxAnswersCount = max($maxAnswersCount, count($answers));
            }
        }
        return $maxAnswersCount;
    }
    ?>

    <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search for any value...">
    <select id="filterColumn">
        <option value="">All Columns</option>
        <?php
        foreach ($answersByLabel as $label => $answers) {
            echo '<option value="' . htmlspecialchars($label) . '">' . htmlspecialchars($label) . '</option>';
        }
        ?>
    </select>
    <button class="export-btn" onclick="exportSelectedRows()">Export Selected Rows</button>
    <table id="dataTable">
        <thead>
            <tr>
                <th><input type="checkbox" onclick="selectAll(this)"></th>
                <?php
                // Output column headers dynamically based on collected labels
                foreach ($answersByLabel as $label => $answers) {
                    echo '<th onclick="sortTable(this)">' . htmlspecialchars($label) . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody id="dataTableBody">
            <?php
            // Output rows based on pagination
            outputTableRows($answersByLabel, $start, $rowsPerPage);
            ?>
        </tbody>
    </table>

    <div class="pagination">
        <?php
        // Display pagination links
        for ($page = 1; $page <= $totalPages; $page++) {
            echo '<a href="?page=' . $page . '"' . ($page == $currentPage ? ' class="active"' : '') . '>' . $page . '</a>';
        }
        ?>
    </div>

    <script>
        function filterTable() {
            var input, filter, table, tbody, tr, td, i, j, txtValue;
            input = document.getElementById("searchInput");
            filterColumn = document.getElementById("filterColumn").value;
            filter = input.value.toUpperCase();
            table = document.getElementById("dataTable");
            tbody = document.getElementById("dataTableBody");
            tr = tbody.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                tds = tr[i].getElementsByTagName("td");
                let found = false;
                for (j = 1; j < tds.length; j++) { // Start at 1 to skip checkbox column
                    td = tds[j];
                    if (td && (filterColumn === "" || table.rows[0].cells[j].innerText === filterColumn)) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }
                tr[i].style.display = found ? "" : "none";
            }
        }

        function exportSelectedRows() {
            var checkboxes = document.querySelectorAll('input[name="export[]"]:checked');
            if (checkboxes.length === 0) {
                alert("Please select rows to export.");
                return;
            }

            var rows = Array.from(checkboxes).map(cb => cb.value);
            var table = document.getElementById("dataTable");
            var csv = [];
            var headers = [];
            var headerCells = table.rows[0].cells;
            for (var k = 1; k < headerCells.length; k++) { // Start at 1 to skip checkbox column
                headers.push('"' + headerCells[k].innerText + '"');
            }
            csv.push(headers.join(","));
            for (var i = 0; i < rows.length; i++) {
                var row = [], cols = table.rows[parseInt(rows[i]) + 1].querySelectorAll("td");
                for (var j = 1; j < cols.length; j++) { // Start at 1 to skip checkbox column
                    var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, "");
                    row.push('"' + data + '"');
                }
                csv.push(row.join(","));
            }
            var csvContent = csv.join("\n");
            var blob = new Blob([csvContent], { type: 'text/csv' });
            var link = document.createElement("a");
            link.setAttribute("href", URL.createObjectURL(blob));
            link.setAttribute("download", "pre_employers.csv");
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function selectAll(source) {
            checkboxes = document.querySelectorAll('input[name="export[]"]');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox')
                    checkboxes[i].checked = source.checked;
            }
        }

        function sortTable(header) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("dataTable");
            switching = true;
            dir = "asc";
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[header.cellIndex];
                    y = rows[i + 1].getElementsByTagName("TD")[header.cellIndex];
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
</body>
</html>
