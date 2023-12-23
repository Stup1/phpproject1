<?php
session_start();



// check if the form has been submitted
if (isset($_POST['submit'])) {
    // connect to the database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'student';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    // check if the connection was successful
    if (!$conn) {
        die('Could not connect to the database: ' . mysqli_connect_error());
    }

    // retrieve the notice data from the form
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date_added = date('Y-m-d H:i:s');

    // insert the notice into the database
    $sql = "INSERT INTO notices (title, description, date_added) VALUES ('$title', '$description', '$date_added')";
    if (mysqli_query($conn, $sql)) {
        echo '<p>Notice added successfully.</p>';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    // close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Notice</title>
</head>
<body>
<h1>Add Notice</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Title:</label><br>
    <input type="text" name="title"><br>
    <label>Description:</label><br>
    <textarea name="description"></textarea><br>
    <input type="submit" name="submit" value="Add Notice">
</form>
</body>
</html>
