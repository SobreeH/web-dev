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
        <?php
        $_year = $_POST['no-year-deposit'];

        
        ?>
    </form>
</body>
</html>