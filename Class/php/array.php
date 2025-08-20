<?php

$num = [10, 25, 30, 67, 75, 90,300,5];
print_r($num);
echo "<br>";
echo "num[0] = " . $num[0] . "<br>";
echo "change num[3] to 100 <br>";
$num[3] = 100;
echo "num[3] = " . $num[3] . "<br>";
echo "<pre>";
print_r($num);
echo "</pre>";

$max_num = $num[0];
$min_num = $num[0];
for ($i=0; $i < count($num); $i++) {
    if($num[$i] > $max_num) {
        $max_num = $num[$i];
    }
}
for ($i=0; $i < count($num); $i++) {
    if($num[$i] < $min_num) {
        $min_num = $num[$i];
    }
    else {
        $min_num = $num[0];
    }
}
echo "Max number is: " . $max_num . "<br>";
echo "Min number is: " . $min_num . "<br>";


echo "<br> sorting the array [Bubble sort] <br>";
$sorted_num = $num;
$bubble = array();
for ($i= 0; $i < count($sorted_num);$i++) {
    $bubble[0] = $sorted_num[$i];
    $bubble[1] = $sorted_num[$i+1];
    if ($bubble[0] > $bubble[1]) {
        $sorted_num[$i] = $bubble[1];
        $sorted_num[$i+1] = $bubble[0];
    }
}

print_r($sorted_num);
?>
