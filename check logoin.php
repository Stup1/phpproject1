<?php

// start the session
session_start();

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

// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validate the input fields
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // check if the credentials exist in the database
    $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($result === false) {
        die('Error executing query: ' . mysqli_error($conn));
    }


    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // set a session variable with the user's role
        $_SESSION['role'] = $row['role'];

        // redirect to the respective panel
        if ($row['role'] == 'admin') {
            header('Location: admindashboard.php');
            exit;
        } else {
            header('Location: dashboard.php');
            exit;
        }
    } else {
        // credentials do not match
        echo 'Invalid username or password.';
    }
}

// close the database connection
mysqli_close($conn);

?>
