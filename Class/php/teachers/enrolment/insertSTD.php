<?php
    include 'connDB.php';
   $dbname = "enrolment";
  if ($conn->select_db($dbname)) {
    echo "Database ".$dbname." selected successfully! <br>";
} else {
    echo "Error selecting database: " . $conn->error;
}
    $id = $_POST['id'];
	$name = $_POST['name'];
    $faculty = $_POST['faculty'];
    $major = $_POST['major'];
    $year = $_POST['year'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    echo "id =".$id." <br>";
  
    $stmt = $conn->prepare("insert into student(id,name,faculty,major,year,age,address,tel) values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssiiss",$id,$name,$faculty,$major,$year,$age,$address,$tel);
		$execval = $stmt->execute();
		echo $execval;
 ?>
    <table><tr>
    <td></td>
    <td><a href='showww.php'>[ย้อนกลับ]</a></td>
  </tr></table>