<?php
include "config.php";


// showing the selected
$sql = "SELECT students.student_id, students.name, students.email, registrations.course 
        FROM students INNER JOIN registrations 
        ON students.student_id = registrations.student_id";
$result = $conn->query($sql);
?>

<h2>Student Registrations</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['student_id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['course'] ?></td>
    </tr>
    <?php } ?>
</table>
