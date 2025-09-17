<?php
class Shape {
  public $fname;
  public $x,$y;
  public function __construct($x, $y, $name) {
		$this->x = $x;
		$this->y = $y;
		$this->fname = $name;
	}
  public function getName() { 
    return $this->fname."<br>";  
  }
public function calArea() {
	return 0.0."<br>";
}
}
class Circle extends Shape {
  private $radius;
  function __construct($x,$name) {
    $this->radius = $x;
	$this->fname = $name;
  }
  function calArea() {
    return 3.14 * $this->radius * $this->radius ."<br>";
  }
}
class Triangle extends Shape {
  private $w, $h;
  function __construct($x, $y,$name) {
    $this->w = $x;
    $this->h = $y;
	$this->fname = $name;
  }
  function calArea() {
    return 0.5*$this->w * $this->h . "<br>";
  }
}
class Rectangle extends Shape {
  private $w, $h;
  function __construct($x, $y,$name) {
  $this->w = $x;
    $this->h = $y;
	$this->fname = $name;
  }
  function calArea() {
    return $this->w * $this->h . "<br>";
  }
}
$shape = new Shape(0,0,"Shape");
echo $shape->getName();
echo $shape->calArea();
$circle = new Circle(10,"Circle");
echo $circle->getName();
echo $circle->calArea();
$triangle = new Triangle(5, 10,"Triangle");
echo $triangle->getName();
echo $triangle->calArea();  
$rectangle = new Rectangle(5, 10,"Rectangle");
echo $rectangle->getName();
echo $rectangle->calArea();  
