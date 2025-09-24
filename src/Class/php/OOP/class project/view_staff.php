<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>staff with oop </title>
</head>

<body  bgcolor="#CCCCCC">
  
<?php
include ("staff.php");

$name = $_POST['name'];
$sex = $_POST['sex'];
$faculty = $_POST['faculty'];
$major = $_POST['major'];
$age = $_POST['age'];
$role = $_POST['role'];

if($role == "Admin_staff") {
 $staff = new Admin_Staff($name,$sex,$age);
 $staff->setFaculty($faculty);
 $staff->setMajor($major);
 $staff->setAge($age);
 $staff->setRole($role);
 $staff ->toString();
} else {
 $staff = new Lecturer($name,$sex,$age);
 $staff->setFaculty($faculty);
 $staff->setMajor($major);
 $staff->setAge($age);
 $staff->setRole($role);
 $staff ->toString();
}


?>
		
 <a href="staff_form.php"><h5>back to form</h5> </a>
</body>
</html>