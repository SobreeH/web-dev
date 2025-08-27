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
  

    $sql = "SELECT id,name,faculty,major,year,age,address,tel FROM student";
    $result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo "<table border='1' align='center' cellpadding='10'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>ID</td><td>Name</td><td>Faculty</td><td>Major</td><td>Year</td><td>Age</td><td>Address</td><td>Tel</td><td>Edit</td><td>Delete</td></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = "&id=".$row["id"];
    	$name = "&name=".$row["name"];
      $faculty = "&faculty=".$row["faculty"];
      $major = "&majer=".$row["major"];
      $year = "&year=".$row["year"];
      $age = "&age=".$row["age"];
      $address = "&address=".$row["address"];
      $tel = "&tel=".$row["tel"];

  echo "<tr>";
  echo "<td>"  .$row["id"] .   "</td> "; 
  echo "<td>"  .$row["name"] .   "</td> "; 
  echo "<td>"  .$row["faculty"] .   "</td> ";  
  echo "<td>"  .$row["major"] .    "</td> ";
  echo "<td>"  .$row["year"] .   "</td> "; 
  echo "<td>"  .$row["age"] .   "</td> ";
  echo "<td>"  .$row["address"] .   "</td> ";
  echo "<td>"  .$row["tel"] .   "</td> ";   
  //แก้ไขข้อมูล
  echo "<td><a href='formedit.php?".$id,$name,$faculty,$majer,$year,$age,$address,$tel."'><img src='edit.png' width='20'></a></td> ";
  
  //ลบข้อมูล
  echo "<td><a href='delete.php?".$id."'><img src='delete.svg' width='20'></a></td> ";
  echo "</tr>";     

    }
    echo "</table>";

    echo "<center><a href='insertstudent.php'><br>[Insert]</a></center>";

} else {
    echo "<center>ไม่มีข้อมูล</center>";
    echo "<center><a href='studenttt.php'><br>[Insert]</a></center>";
}

?>
