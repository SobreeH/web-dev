<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>student with oop </title>
</head>

<body  bgcolor="#CCCCCC">
  
<?php
include ("student.php");
$role = $_POST["ptime"];
$name = $_POST['name'];
$sex = $_POST['sex'];
$faculty = $_POST['faculty'];
$major = $_POST['major'];
$age = $_POST['age'];
$yearStart = $_POST['yearstart'];
$yearEnd = $_POST['yearstart'];
if ($role == "Full-time") {

 $std = new Ftime_Student($name,$sex,$age);
 $std->setFaculty($faculty);
 $std->setMajor($major);
 $std->setAge($age);
 $std->setYearStart($yearStart);
 $std->YearEnd($yearEnd);
 $std ->toString();
} else {
 $std = new Ptime_Student($name,$sex,$age);
 $std->setFaculty($faculty);
 $std->setMajor($major);
 $std->setAge($age);
 $std->setYearStart($yearStart);
 $std->YearEnd($yearEnd);
 $std ->toString();
}
?>
		
 <a href="student_form.php"><h5>back to form</h5> </a>
</body>
</html>