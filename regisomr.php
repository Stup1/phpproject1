<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'student';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$role = mysqli_real_escape_string($conn, $_POST['role']);

$query = "INSERT INTO register  (username, email, password, role) VALUES ('$name', '$email', '$password', '$role')";

if (mysqli_query($conn, $query)) {
    echo 'User registered successfully.';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
