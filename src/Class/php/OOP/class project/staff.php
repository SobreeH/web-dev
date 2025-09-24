<?php
include("university.php");

class Lecturer extends Staff {
function toString(){
    parent::toString();
    echo"Can have 3 days off in a week";
}
}

class Admin_Staff extends Staff {
 function toString(){
    parent::toString();
    echo"Can have 2 days off in a week";
}  
}
?>