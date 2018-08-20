<?php

/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/8/18
 * Time: 12:20 AM
 */
class Dog
{
//    private $age;
//    private $weight;
//    private $color;

    public $age;
    private $weight;
    private $color;
    function __construct(int $years = 2, int $kg = 8,string $fur = "black"){
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
    function __destruct()
    {
        echo "<br> object is destoed!";
    }
}

$fido = new Dog(3, 15, 'red');

echo "<br>fur fido is ".$fido->getColor();
echo "<br>fido is ".$fido->getAge()." old";
echo "<br>fido's weight is ".$fido->getWeight()." kg<br>";

$fido->burk();

$pooch = new Dog(4, 18, "grey");
echo '<hr>pooch: '.$pooch->getAge().' years old ';
echo $pooch->getWeight().' kg '.$pooch->getColor();
$pooch->burk();

$rover = new Dog();

echo '<hr>rover: '.$rover->getAge().' years old ';
echo $rover->getWeight().' kg '.$rover->getColor();
$rover->burk();

$items = get_class_vars(Dog);
echo "count variables of class dog are: ".count($items);

$methods = get_class_methods(Dog);
foreach ($methods as $method) {
    echo "<hr>method with name $method";
}

?>