


<link rel="stylesheet" type="text/css" href="style.css">
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student';
$conn = mysqli_connect($host, $username, $password, $dbname);


// Check for errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Get the search query from the form submission
$search = $_POST['search'];

// Prepare a SQL query to search for the student's results
$sql = "SELECT * FROM result WHERE roll_no LIKE '%$search%'";

// Execute the query and get the results
$result = $conn->query($sql);

// Check if any results were found
if ($result->num_rows > 0) {
    // Output the results as a table
    echo '<table class="result-table">';
    echo '<tr><th>Name</th><th>Maths</th><th>Science</th><th>English</th><th>Average</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['maths'] . '</td>';
        echo '<td>' . $row['science'] . '</td>';
        echo '<td>' . $row['english'] . '</td>';
        $average = ($row['maths'] + $row['science'] + $row['english']) / 3;
        echo '<td>' . round($average, 2) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    // Output a message if no results were found
    echo 'No results found for "' . $search . '"';
}

// Close the database connection
$conn->close();
?>
