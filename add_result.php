<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student';
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $roll_no = mysqli_real_escape_string($conn, $_POST['roll_no']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $maths = mysqli_real_escape_string($conn, $_POST['maths']);
    $science = mysqli_real_escape_string($conn, $_POST['science']);
    $english = mysqli_real_escape_string($conn, $_POST['english']);

    // Calculate average
    $average = ($maths + $science + $english) / 3;

    // Insert data into database
    $sql = "INSERT INTO result (roll_no, name, maths, science, english, average)
            VALUES ('$roll_no', '$name', $maths, $science, $english, $average)";
    if (mysqli_query($conn, $sql)) {
        header('Location: admindashboard.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
?>
<link rel="stylesheet" type="text/css" href="new.css">

<!DOCTYPE html>
<html>
<head>
    <title>Insert Result</title>
</head>
<body>
<h1>Insert Result</h1>
<form method="post">
    <label>Roll No:</label>
    <input type="text" name="roll_no" required><br><br>

    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Maths:</label>
    <input type="text" name="maths" required><br><br>

    <label>Science:</label>
    <input type="text" name="science" required><br><br>

    <label>English:</label>
    <input type="text" name="english" required><br><br>

    <input type="submit" value="Insert">
</form>
</body>
</html>
