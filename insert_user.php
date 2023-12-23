<?php
$host='localhost';
$username="root";
$password="";
$database="student";

$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error){
    die("Failed: " . $conn->connect_error);
}else{
    echo "Success";

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];

        $query="INSERT INTO registration (name, email, password) VALUES ('$name', '$email', '$password')";

        if ($conn->query($query) === TRUE) {
            echo "User registered";
        }else{
            echo "Failed: " . $conn->error;
        }
    }else{
        echo "Failed: Invalid data";
    }
}
