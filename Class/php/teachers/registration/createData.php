<?php
include "config.php";

// sql to create table students
$sql = "CREATE TABLE IF NOT EXISTS students (
  student_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL
)";

// sql to create table registrations
$reg = "CREATE TABLE IF NOT EXISTS registrations (
  reg_id INT AUTO_INCREMENT PRIMARY KEY,
  student_id INT NOT NULL,
  course VARCHAR(100) NOT NULL,
  FOREIGN KEY (student_id) REFERENCES students(student_id) ON DELETE CASCADE
)";


// execute code to create table student
if ($conn->query($sql) === TRUE) {
  echo "Table students created successfully<br>";
} else {
  echo "Error creating table students: " . $conn->error . "<br>";
}

//execute code to create table registration
if ($conn->query($reg) === TRUE) {
  echo "Table registrations created successfully<br>";
} else {
  echo "Error creating table registrations: " . $conn->error . "<br>";
}

$conn->close();
?>
