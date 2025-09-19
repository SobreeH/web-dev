<?php
  include 'connDB.php';
   $dbname = "enrolment";
   $conn->select_db($dbname);
 /* if ($conn->select_db($dbname)) {
    echo "Database ".$dbname." selected successfully! <br>";
} else {
    echo "Error selecting database: " . $conn->error;
}
   */ 
    $id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
    $faculty = $_REQUEST['faculty'];
    $major = $_REQUEST['major'];
    $year = $_REQUEST['year'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];
    $tel = $_REQUEST['tel'];
    $before=$_REQUEST['before'];

    $sql="UPDATE student SET id='$id',name='$name',faculty='$faculty',major='$major',year='$year',age='$age',address='$address',tel='$tel' WHERE id=$before";
    if($conn->query($sql)===TRUE){
     include "showww.php";
    }
    
?>