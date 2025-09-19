<?php
//wansobree hajihama 6620610023
$_identity = $_POST['identity'];
$_email = $_POST['email'];
$_gender = $Post['gender'];
$_occupation = $_POST['occupation'];
$_talents = $_POST['talents'];


echo "<h1>Form Submission</h1>";
echo "<p>mr/mrs. $_identity</p>";
echo "<p>email: $_email</p>";
echo "<p>gender: $_gender</p>";
echo "<p>occupation: $_occupation</p>";
echo "<p>special talent: $_talents</p>";
echo "<p>interested technology: </p>".$_POST['database']."<br />".$_POST['programming']."<br />".$_POST['network']."<br />";
?>