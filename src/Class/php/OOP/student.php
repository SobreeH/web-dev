<?php
class Student
{
    var $name;
    var $sex;
    var $age;
    var $faculty; 
    var $major;
    var $yearStart;
    var $yearEnd;

    // Constructor (better to use __construct in PHP)
    function __construct($p_name, $p_sex, $p_age)
    {
        $this->name = $p_name;
        $this->sex  = $p_sex;
        $this->age  = $p_age;
    }

    function setName($s_name)
    {
        $this->name = $s_name;
    }
    function setSex($s_sex)
    {
        $this->sex = $s_sex;
    }
    function setAge($s_age)
    {
        $this->age = $s_age;
    }
    function setFaculty($s_faculty)
    {
        $this->faculty = $s_faculty;
    }
    function setMajor($s_major)
    {
        $this->major = $s_major;
    }
    function setYearStart($s_yearStart)
    {
        $this->yearStart = $s_yearStart;
    }
    function setYearEnd($s_yearEnd)
    {
        $this->yearEnd = $s_yearEnd;
    }

    function getName()
    {
        return $this->name;
    }
    function getSex()
    {
        return $this->sex;
    }
    function getAge()
    {
        return $this->age;
    }
    function getFaculty()
    {
        return $this->faculty;
    }
    function getMajor()
    {
        return $this->major;
    }
    function getYearStart()
    {
        return $this->yearStart;
    }
    function getYearEnd()
    {
        return $this->yearEnd;
    }

    function toString()
    {
        echo $this->name." ".$this->sex." ".$this->age.
             " studying in faculty of ".$this->faculty." and major ".$this->major;
    }
}
?>