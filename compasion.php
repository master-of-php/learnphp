<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 20.07.18
 * Time: 0:52
 */

$zero = 0;
$nil = 0;
$one = 1;
$upr = 'A';
$lvr ='a';

echo "0 == 0".var_dump($zero == $nil);
echo "<br>";
echo "0 == 1".var_dump($zero == $one);
echo "<br>";
echo "A == a".var_dump($upr == $lvr);
echo "<br>";
echo "A != a".var_dump($upr != $lvr);
echo "<hr>";
echo "<br>";
echo "0 > 0".var_dump($zero > $zero);
echo "<br>";
echo "1 >= 0".var_dump($one >= $zero);
echo "<br>";
echo "1 <=> 0".var_dump($one <=> $zero);
echo "<br>";
echo "1 <=> 1".var_dump($one <=> $one);
echo "<br>";
echo "0 <=> 1".var_dump($zero <=> $one);
echo "<hr>";