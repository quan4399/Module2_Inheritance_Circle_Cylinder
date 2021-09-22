<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle1 = new Circle("red",10);
echo $circle1->toString()."</br>";

$cylinder1 = new Cylinder("black",10,20);
echo $cylinder1->toString();
