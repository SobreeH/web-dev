<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    // เริ่ม Transaction
    $conn->begin_transaction();

    try {
        // Insert student
        $stmt1 = $conn->prepare("INSERT INTO students (name, email) VALUES (?, ?)");
        $stmt1->bind_param("ss", $name, $email);
        $stmt1->execute();
        $student_id = $stmt1->insert_id;

        // Insert registration
        $stmt2 = $conn->prepare("INSERT INTO registrations (student_id, course) VALUES (?, ?)");
        $stmt2->bind_param("is", $student_id, $course);
        $stmt2->execute();

        // commit transaction
        $conn->commit();

        echo "✅ Insert success!";
    } catch (Exception $e) {
        $conn->rollback();
        echo "❌ Insert failed: " . $e->getMessage();
    }
}
?>



<form  method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="text" name="email" required><br>
    Course: <input type="text" name="course" required><br>
    <button type="submit">Save</button>
</form>
<button><a href="view.php">View Students Registered</a></button>