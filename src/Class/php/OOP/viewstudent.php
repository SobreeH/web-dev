<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>student with oop </title>
</head>

<body  bgcolor="#CCCCCC">
  
<?php
include ("student.php");

$name = $_POST['name'];
$sex = $_POST['sex'];
$faculty = $_POST['faculty'];
$major = $_POST['major'];
$age = $_POST['age'];
 $std = new student($name,$sex,$age);
 $std->setFaculty($faculty);
 $std->setMajor($major);
 $std->setAge($age);
$std ->toString();
?>
		
 <a href="studentform.php"><h5>back to form</h5> </a>
</body>
</html>