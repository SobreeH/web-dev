<?php

function one (&$parameter){
    $parameter++ ;
    
    
}
$a = 10;
one($a);

echo"a = $a <br>";


?>