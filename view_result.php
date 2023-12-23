
<link rel="stylesheet" type="text/css" href="new.css">
<?php
// Connect to database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student';
$conn = mysqli_connect($host, $username, $password, $dbname);

// Get data from database
$sql = 'SELECT * FROM result';
$result = mysqli_query($conn, $sql);

// Output data as table rows
echo '<table>';
echo '<tr><th>Name</th><th>Maths</th><th>Science</th><th>English</th><th>Average</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $maths = $row['maths'];
    $science = $row['science'];
    $english = $row['english'];
    $average = $row['average'];

    echo '<tr>';
    echo "<td>$name</td>";
    echo "<td>$maths</td>";
    echo "<td>$science</td>";
    echo "<td>$english</td>";
    echo "<td>$average</td>";
    echo '</tr>';
}
echo '</table>';

?>
