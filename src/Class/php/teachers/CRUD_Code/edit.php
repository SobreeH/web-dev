<?php
  include 'connDB.php';
   $dbname = "enrolment";
  if ($conn->select_db($dbname)) {
    echo "Database ".$dbname." selected successfully! <br>";
} else {
    echo "Error selecting database: " . $conn->error;
}
    
    $id = $_REQUEST['id'];
	
    $before=$_REQUEST['before'];

    $sql="UPDATE student SET id='$id' WHERE id=$before";
    if($conn->query($sql)===TRUE){
     include "showww.php";
    }
    
?>