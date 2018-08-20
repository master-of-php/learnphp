<?php

/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/8/18
 * Time: 11:10 PM
 */
class Polygon
{
    private $width;
    private $height;

    function __construct(int $w = 4, int $h = 5)
    {
        $this->width = $w;
        $this->height = $h;

    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}

interface Shape
{
    public function area();
}

class Rectangle extends Polygon implements Shape
{
    public function area()
    {
        return ($this->getHeight() * $this->getWidth());
    }
}

class Triangle extends Polygon implements Shape
{
    public function area()
    {
        return ($this->getWidth() * ($this->getHeight() / 2));
    }
}

function getArea(Shape $shape)
{
    return $shape->area();
}

$rect = new Rectangle(8, 10);
$trio = new Triangle(8, 10);

echo "<hr>area of rectangle is: " . getArea($rect);
echo "<hr>area of triangle is: " . getArea($trio);
?>