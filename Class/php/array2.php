<?php
$people=array(  
    0=> array("Name"=>"Tom","Surename"=>"Einstein", "age"=>124),
    1=> array("Name"=>"John","Surename"=>"Smith", "age"=>30),
    2=> array("Name"=>"Alice","Surename"=>"Johnson", "age"=>45)
            );
$num = count($people);
$i=0;
for ($i=0; $i<$num; $i++)
    {
    echo $people[$i]["Name"]."  ".$people[$i]["Surename"]."  ".$people[$i]["age"]." <br>";
 }
 
?>
