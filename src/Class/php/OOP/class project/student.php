<?php
include("university.php");


class Ftime_Student extends Student {
    
    public function toString() {
        parent::toString();
        echo "Role is Full-time student <br>";
        echo"Start year:". $this->yearStart. "<br>";
        echo"expected graduation year:". $this->yearEnd. "<br>";
    }
}
class Ptime_Student extends Student {
    function YearEnd($s_yearStart)
    {
        parent::YearEnd($s_yearStart);
        $this->yearEnd = $s_yearStart+8;
    }
    public function toString() {
        parent::toString();
        echo"Role is Part-time Student <br>";
        echo"Start year:". $this->yearStart . "<br>";
        echo"expected graduation year:". $this->yearEnd ."<br>";
    }


}
