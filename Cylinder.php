<?php

class Cylinder extends Circle
{
    public $height;

    public function __construct($color, $radius , $height)
    {
        parent::__construct($color, $radius);
        $this->height = $height;
    }
    public function getArea()
    {
        return parent::getArea() * 2 + parent::getPerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::getArea() * $this->height;
    }

    public function toString()
    {
        return "hinh tru co mau sac : ". $this->color . " , ban kinh : " . $this->radius. ", chieu cao: " . $this->height. " , the tich : " . $this->calculateVolume();
    }
}