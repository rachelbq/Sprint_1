<?php

class Shape {

	public $ample;
	public $alt;

	public function __construct($ample, $alt)
	{
		$this->ample = $ample;
		$this->alt = $alt;
	}
}

class Triangle extends Shape {
    public function area(){
		return $this->ample * $this->alt / 2;
	}
}

class Rectangle extends Shape {
    public function area(){
		return $this->ample * $this->alt;
	}
}

$triangle = new Triangle(20,20);
$rectangle = new Rectangle(40,20);

echo "Àrea triangle = base * altura / 2 = " .$triangle->area() .PHP_EOL;
echo "Àrea rectangle = base * altura = " .$rectangle->area();

?>