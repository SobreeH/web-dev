<?php
class student 
{
    var $name;
    var $marks;
    function setdata($nm,$mk)
    {
        $this->name = $nm;
        $this->marks = $mk;
    }
}
$obj1=new student;
$obj1->setdata("abc",90);
echo "Name=$obj1->name<br>";
echo "Marks=$obj1->marks<br>";
$obj2=new student;
$obj2->setdata("sobree",80);
echo "Name=$obj2->name<br>";
echo "Marks=$obj2->marks<br>";
?>
