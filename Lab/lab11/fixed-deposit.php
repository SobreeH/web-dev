<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fixed deposit</title>
</head>
<body>
    <form action="fixed-deposit.php" method="post">
        <label for="no-year-deposit">Number of year[s] to deposit</label>
<input type="number" id="no-year-deposit" name="no-year-deposit" min="1" max="10" required>
        <input type="submit" value="OK">
    <br><br>
    </form>
 <?php
     if (isset($_POST['no-year-deposit'])) {
         
         $_year = $_POST['no-year-deposit'];
     
        echo "<form action='deposit-result.php' target='_blank' method='post'>";
       
        echo "<label>Number of year(s) to deposit = $_year year(s)</label><br>";
        echo "<input type='hidden' name='year' value='$_year'><br>";
    
        for ($i = 1; $i <= $_year; $i++) {
            echo "<label for='deposit$i'>year $i: </label>";
            echo "<input type='number' id='deposit$i' name='deposit$i' min='0' required><br><br>";
        }
    
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }
        ?>


</body>
</html>

