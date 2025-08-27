<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollment";

// Create connection
$conn = new mysqli($servername, $username, $password,);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS enrollment";

if ($conn->query($sql) === TRUE) {
  echo "Database created successfully <br>";
} else {
  echo "Error creating database: " . $conn->error;
}

if($conn -> select_db($dbname)) {
    echo "Database $dbname selected successfully <br>";
} else {
    echo "Error using database: " . $conn->error;
}


// 1. sql to create table IF NOT EXISTS teacher
$sql_t = "CREATE TABLE IF NOT EXISTS teacher(
    TeacherID VARCHAR(10)  PRIMARY KEY,
    TName VARCHAR(30) ,
    TAddress VARCHAR(30),
    Major VARCHAR(20))";

// 2. sql to create table IF NOT EXISTS student
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

if ($conn->query($sql_t) == TRUE) {
  echo "Table teacher created successfully <br>";
} else {
  echo "Error creating table: " . $conn->error;
}

if ($conn -> query($sql_s)== TRUE) {
    echo "Table student created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

echo "<p>Go fill the student form  <a href=student_form.html >here</a> <p>"


?>