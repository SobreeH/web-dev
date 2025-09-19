<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Student form</title>
</head>
<body>
    <h1>Student Form</h1>
    <form action="student_form.php" method="post">
    <br>
    <label for="id">Student ID</label>
    <input type="text" name="id" placeholder="Student ID" maxlength="10" required><br>
    <br>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Name" maxlength="30" required><br>
    <br>
    <label for="faculty">Faculty</label>
    <input type="text" name="faculty" id="faculty" placeholder="Faculty" maxlength="30" required><br>
    <br>
    <label for="major">Major</label>
    <input type="text" name="major" id="major" placeholder="Major" maxlength="50" required><br>
    <br>
    <label for="year">Year</label>
    <input type="number" name="year" id="year" min="1" max="5" required><br>
    <br>
    <label for="age">Age</label>
    <input type="number" name="age" id="age" min="15" max="100" required><br>
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" placeholder="Address" maxlength="50" required><br>
    <br>
    <label for="tel">Telephone</label>
    <input type="tel" name="tel" id="tel" placeholder="Telephone" maxlength="10" required><br>
    <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    </form>
</body>
</html>
<?php
include("condb.php");
$dbname = "enrollment";

if ($conn->select_db($dbname) === TRUE){
   echo "select db successful <br>";
} else{
   echo "Error selecting database: " . $conn->error;
}
  
if (isset($_POST['id']) ) 
   {
    echo "All data received <br>";
    $std_id = $_POST['id'];
$std_name = $_POST['name'];
$std_faculty = $_POST['faculty'];
$std_major = $_POST['major'];
$std_year = $_POST['year'];
$std_age = $_POST['age'];
$std_address = $_POST['address']; 
$std_tel = $_POST['tel'];



$stmt = $conn->prepare("insert into student (id, name, faculty, major, year, age, address, tel) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssiis",$std_id, $std_name, $std_faculty, $std_major, $std_year, $std_age, $std_address, $std_tel);
$execval = $stmt->execute();
echo $execval;

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
   {
        echo "<table border='1' align='center' cellpadding='10px'>";
        echo "<tr align='center' bgcolor='#CCCCCC'>
         <td>Student ID</td>
         <td>Name</td>
         <td>Faculty</td>
         <td>Major</td>
         <td>Year</td>
         <td>Age</td>
         <td>Address</td>
         <td>Tel</td>
         </tr>";
        
         while($row = $result->fetch_assoc()) {
            $id = "&id=" .$row["id"];
            $name = "&name".$row["name"];
            $faculty = "&faculty".$row["faculty"];
            $major = "&major".$row["major"];
            $year = "&year".$row["year"];
            $age = "&age".$row["age"];
            $address = "&address".$row["address"];
            $tel = "&tel".$row["tel"];

            echo "<tr>";
            echo "<td>" . $row["id"]. "</td>";
            echo "<td>" . $row["name"]. "</td>";
            echo "<td>". $row["faculty"] ."</td>";
            echo "<td>". $row["major"] ."</td>";
            echo "<td>". $row["year"] ."</td>";
            echo "<td>". $row["age"] ."</td>";
            echo "<td>". $row["address"] ."</td>";
            echo "<td>". $row["tel"] ."</td>";

            echo "<td><a href='edit_form.php?$id$name$faculty$major$year$age$address$tel'><img src= 'edit.png' width='20' alt='edit logo'></a></td>";

            echo "<td><a href='delete.php?$id'><img src= 'delete.png' width='20' alt='delete logo'></a></td>";
            echo "</tr>";

} 
} else {
   echo "<center> NO DATA </center>";
   echo "<center><a href='student.php'><br>[Insert]</a></center>";
}
} 
?>