<?php

class Circle
{
    public $color;
    public $radius;

    function __construct($color, $radius)
    {
        $this->color = $color;
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius,2);
    }

    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function toString()
    {
        return 'hinh tron co mau sac : ' . $this->color . ' , ban kinh : ' . $this->radius . ' , Chu vi : ' . $this->getPerimeter().
            ' , dien tich : ' . $this->getArea();
    }

}