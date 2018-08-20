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
        echo "gav gav! <br>";
    }


}

$fido = new Dog();
$fido->setAge(3);
$fido->setWeight(15);
$fido->setColor("brown");

echo "<br>fur fido is ".$fido->getColor();
echo "<br>fido is ".$fido->getAge()." old";
echo "<br>fido's weight is ".$fido->getWeight()." kg<br>";
$fido->burk();
?>