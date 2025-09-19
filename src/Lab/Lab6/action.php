<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fullname= $_POST["fullname"];
    $email= $_POST["e-mail"];
    $password= $_POST["password"];
    $placeofbirth= $_POST["place-of-birth"];

    echo "Full Name: " . $fullname . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Place of Birth: " . $placeofbirth . "<br>";
}