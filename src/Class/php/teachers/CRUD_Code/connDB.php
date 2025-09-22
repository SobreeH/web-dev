<?php
$servername = "mariadb"; // service name in docker-compose.yaml
$username = "root";
$password = "root"; // must match MYSQL_ROOT_PASSWORD in docker-compose.yaml
$database = "devdb"; // optional, if you defined MYSQL_DATABASE

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
