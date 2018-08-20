<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 29.07.18
 * Time: 2:14
 */
$numbers = array(10, 20, 30);

echo "<dt> cicle while";

$i = 0;

while ($i = 0) {
    echo "<dd> element $i = $numbers[$i]";
    $i++;
}

echo "<br>";
echo "<dt> cicle do while";


$j = 0;
do {
    echo "<dd> element $j = $numbers[$j]";
    $j++;
}
while($j = 0);