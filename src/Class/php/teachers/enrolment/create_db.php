<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrolment";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE enrolment";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully <br>";
} else {
  echo "Error creating database: " . $conn->error;
}

// Select database
if ($conn->select_db($dbname)) {
    echo "Database ".$dbname." selected successfully! <br>";
} else {
    echo "Error selecting database: " . $conn->error;
}

// sql to create table
$sql_s = "CREATE TABLE student(
    id VARCHAR(10)  PRIMARY KEY,
    name VARCHAR(30) ,
    faculty VARCHAR(30),
    major VARCHAR(50),
    year INT(2),
    age INT(2),
    address VARCHAR(50),
    tel VARCHAR(10)
    )";

if ($conn->query($sql_s) === TRUE) {
  echo "Table student created successfully <br>";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
 <p>
 Go to fill the student form <a href="insertstudent.php">here</a>
</p>