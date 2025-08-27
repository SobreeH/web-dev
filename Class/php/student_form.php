
<?php
include("condb.php");
$dbname = "enrollment";

if ($conn->select_db($dbname) === FALSE){
   echo "select db successful <br>";
} else{
   echo "Error selecting database: " . $conn->error;
}
  
if (isset($_POST['id']) ) {
    echo "All data received <br>";
    $std_id = $_POST['id'];
$std_name = $_POST['name'];
$std_faculty = $_POST['faculty'];
$std_major = $_POST['major'];
$std_year = $_POST['year'];
$std_age = $_POST['age'];
$std_address = $_POST['address']; 
$std_tel = $_POST['tel'];
}


$stmt = $conn->prepare("insert into student (id, name, faculty, major, year, age, address, tel) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssiis",$std_id, $std_name, $std_faculty, $std_major, $std_year, $std_age, $std_address, $std_tel);
$execval = $stmt->execute();
echo $execval;


?>