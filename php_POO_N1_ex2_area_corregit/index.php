<?php

include("shape.php");
include("triangle.php");
include("rectangle.php");


$triangle1 = new Triangle(20,20);
$rectangle1 = new Rectangle(40,20);

echo "Àrea triangle = base * altura / 2 = " .$triangle1->area() .PHP_EOL;
echo "Àrea rectangle = base * altura = " .$rectangle1->area();

?>