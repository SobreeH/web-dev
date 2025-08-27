<?php

function increment_by_two($int_parameter) {
    $int_parameter += 2;
    return $int_parameter;
}
function increment_by_three($int_parameter) {
    $int_parameter++;
    return increment_by_two($int_parameter);
}

$a = increment_by_three(34);
echo "a= $a <br>";

?>