<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollment";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE enrolment";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

//$conn->close();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE student(
    id VARCHAR(10)  PRIMARY KEY,
    name VARCHAR(30) ,
    faculty VARCHAR(30),
    major VARCHAR(50),
    year INT(2),
    age INT(2),
    address VARCHAR(50),
    tel VARCHAR(10)
    )";

if ($conn->query($sql) === TRUE) {
  echo "Table student created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
 <p>
 Go to fill the student form <a href="insertstudent.php">here</a>
</p>