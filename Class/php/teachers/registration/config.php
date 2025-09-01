<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "registration";
// removing the database variable to prevent confusion
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    //create database 'registration' because it does not exist yet
$sql = "CREATE DATABASE IF NOT EXISTS registration";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "error creating database" . $conn->error;
}

$conn->close();

// set $conn to have database registration
$conn = new mysqli($host, $user, $pass, $dbname);


?>
