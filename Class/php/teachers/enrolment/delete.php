<?php
  include 'connDB.php';
   $dbname = "enrolment";
  if ($conn->select_db($dbname)) {
    echo "Database ".$dbname." selected successfully! <br>";
} else {
    echo "Error selecting database: " . $conn->error;
}

$id=$_REQUEST['id'];

$sql="DELETE FROM student WHERE id='$id'";
if($conn->query($sql)===TRUE){
  include "showww.php";
}
?>