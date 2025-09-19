<?php
class university{
    public $uniname="Prince of Songkla University";
    public $deptname;
    public $address= "181 Chareonpradit Road Maung Pattani";
    public $postcode= "94000";
    public $country= "Thailand";

    public function __construct($dept){
        $this->deptname=$dept;
    }

    public function getDeptname(){
    return $this->deptname;
    }
    public function getAddress(){
        return "address is" . $this->address . "". $this->postcode." ".$this->country;
    }
}

$university1= new university("CIM");

echo $university1-> getDeptname();
echo "<br>";
echo $university1->getAddress();