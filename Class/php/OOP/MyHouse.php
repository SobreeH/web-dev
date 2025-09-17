<?php
class MyHouse{
  public $housename;  
  public $color;
  public $housestyle; 
  public $no_of_bedroom;
  public $no_of_bathroom;
  public $area;
 function __construct($color) {
      $this->color = $color;
  }
 function SetHouseName($hname) {  
    $this->housename = $hname;  
  }
  function get_HouseName() { 
    return $this->housename;  
  }
  function set_color($color) { 
    $this->color = $color;
  }
  function get_color() {    
    return $this->color;
  }
  function set_style($style)   
  {
  $this->housestyle = $style; 
  } 
  function get_style() {     
    return $this->housestyle;
  }
  function set_Bedroom($num){
  $this->no_of_bedroom = $num;  
 }                                                 
 function get_Bedroom() {     
    return $this->no_of_bedroom;
  }
  function set_Bathroom($num)   
  {
  $this->no_of_bathroom = $num;                                                    
  } 
  function get_Bathroom() {    
    return $this->no_of_bathroom;
  }
  function set_Area($width, $length)                                                      
  {
  $this->area = $width*$length;                                                
   } 
  function get_Area() {     
    return $this->area;
   }
}   	
 	$house1 = new MyHouse("yellow"); 
	$house1->SetHouseName("SabaiDee"); 
	$house1->set_Bedroom(3); 
	$house1->set_color("blue");  
	$house1->set_style("British country");  
	$house1->set_Bathroom(2);  
	$house1->set_Area(10, 15);  
    echo "My House is ".$house1->get_HouseName()."<br>";
    echo "My House Style is ".$house1->get_style()."<br>";
    echo "My House color is ".$house1->get_color()."<br>";
    echo "Number of bedroom is ".$house1->get_Bedroom()."<br>";
    echo "Number of bathroom is ".$house1->get_Bathroom()."<br>";
	  echo "usable area is " . $house1->get_Area() . " square meters<br>";
 
    echo "<br><br>";

  $house2 = new MyHouse("yellow");
  $house2->SetHouseName("MyGreenHouse");
  $house2->set_Bedroom(6);
  $house2->set_style("Outback");  
	$house2->set_Bathroom(9);  
	$house2->set_Area(20, 15);  
  echo "My House is ".$house2->get_HouseName()."<br>";
  echo "My House Style is ".$house2->get_style()."<br>";
  echo "My House color is ".$house2->get_color()."<br>";
  echo "Number of bedroom is ".$house2->get_Bedroom()."<br>";
  echo "Number of bathroom is ".$house2->get_Bathroom()."<br>";
	echo "usable area is " . $house2->get_Area() . " square meters<br>";

?>