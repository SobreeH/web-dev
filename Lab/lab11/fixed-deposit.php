<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fixed deposit</title>
</head>
<body>
    <form action="fixed-deposit.php" method="get">
        <label for="no-year-deposit">Number of year[s] to deposit</label>
        <input type="number" id="no-year-deposit" name="no-year-deposit" min="1" required>
        <input type="submit" value="OK">
    <br>
        <?php
        $_year = $_GET['no-year-deposit'];
    if (isset($_year)) {
        for ($i = 1; $i <= $_year; $i++) {
            echo "<label for='year$i'>year $i</label>";
            echo "<input type='number' id='year$i' name='year$i' required><br>";
        }
    }
        
        ?>
    </form>
</body>
</html>