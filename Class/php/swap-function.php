<?php
function swap(&$a, &$b) {
    $t = $a;
    $a = $b;
    $b = $t;
}
$x = 10;
$y =3;
echo"x=" . $x . " y=" . $y . "<br>";
swap($x, $y);
echo "x=" . $x . " y=" . $y . "\n";
?>