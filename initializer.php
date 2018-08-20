<?php

/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/8/18
 * Time: 12:20 AM
 */
class Dog
{
    private $age;
    private $weight;
    private $color;

    public function initValue(int $years = 2, int $kg = 8,string $fur = "black"){
        $this->color = $fur;
        $this->age = $years;
        $this->weight = $kg;
    }

    public function setColor($fur)
    {
        $this->color = $fur;
    }

    public function setAge($years)
    {
        $this->age = $years;
    }

    public function setWeight($kg){
        $this->weight = $kg;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getAge(){
        return $this->age;
    }
    public function getWeight(){
        return $this->weight;
    }


    public function burk()
    {
        echo " gav gav! <br>";
    }
}

$fido = new Dog();
$fido->initValue(3, 15,"red");

echo "<br>fur fido is ".$fido->getColor();
echo "<br>fido is ".$fido->getAge()." old";
echo "<br>fido's weight is ".$fido->getWeight()." kg<br>";

$fido->burk();

$pooch = new Dog();
$pooch->initValue(4, 18, "grey");
echo '<hr>pooch: '.$pooch->getAge().' years old ';
echo $pooch->getWeight().' kg '.$pooch->getColor();
$pooch->burk();

$rover = new Dog();
$rover->initValue();

echo '<hr>rover: '.$rover->getAge().' years old ';
echo $rover->getWeight().' kg '.$rover->getColor();
$rover->burk();
?>