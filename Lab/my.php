<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form target="my.php" method="post"> 
        <label for="identity">name-surname: </label>
        <input type="text" id="identity" name="identity" placeholder="Enter your name and surname" required>
        <br><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <br><br>
        <label for="gender">gender</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <br><br>
        <label for="occupation">occupation: </label>
        <select id="occupation" name="occupation" required>
            <option value="student">student</option>
            <option value="lecturer">lecturer</option>
            <option value="staff">staff</option>
        </select>
        <br><br>
        <label for="talent">special talent: </label>
        <textarea id="talent" name="talent" rows="4" cols="50" style="overflow-y: scroll;"></textarea>
        <br><br>
        <label for="tech">interested technology: </label>
        <input type="checkbox" id="database" name="tech" value="database">
        <label for="database">database system</label>
        <input type="checkbox" id="programming" name="tech" value="programming">
        <label for="programming">programming</label>
        <input type="checkbox" id="network" name="tech" value="network">
        <label for="network">network</label>
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

</body>
</html>

<?php

?>