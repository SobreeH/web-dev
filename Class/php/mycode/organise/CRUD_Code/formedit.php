<html>
<head>
    <meta charset="UTF-8">
    <title>แก้ไขข้อมูล</title>
</head>
<body>
<?php

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$faculty = $_REQUEST['faculty'];
$major = $_REQUEST['major'];
$year = $_REQUEST['year'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$tel = $_REQUEST['tel'];

?>
<form action="edit.php">
<center>
<table >
<?php
 echo "<caption><h2>แก้ไขข้อมูลนักศึกษา</h2></caption>
 <tr>
 <td>ID</td>
  <td><input type='text' name='id' value='$id'></td>
  <td><input type='hidden' name='before' value='$id'></td>
</tr>
  <tr>
   <td>Name</td>
    <td><input type='text' name='name' value='$name'></td>
  </tr>
  <tr>
    <td>Faculty</td>
    <td><input type='text' name='faculty' value='$faculty'></td>
  </tr>
  <tr>
    <td>Major</td>
    <td><input type='text' name='major' value='$major'></td>
  </tr>
  <tr>
    <td>Year</td>
    <td><input type='text' name='year' value='$year'></td>
  </tr>
  <tr>
    <td>Age</td>
    <td><input type='text' name='age' value='$age'></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type='text' name='address' value='$address'></td>
  </tr>
  <tr>
    <td>Tel</td>
    <td><input type='text' name='tel' value='$tel'></td>
  </tr>
  <tr>
    <td></td>
    <td><input type='submit' value='แก้ไขข้อมูล'> <input type='reset' value='ยกเลิก'></td>
  </tr>
  <tr>
    <td></td>
    <td><a href='showww.php'>[ย้อนกลับ]</a></td>
  </tr>";
  
  ?>
</table>
</center>
</form>
</body>
</html>