<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 20.07.18
 * Time: 9:39
 */
$a = NULL;
$b = 8;
$c = "PHP this is fun";

$verb = ($b == 1)? "you are guess" : "you arent guess";
echo "$verb you speak number $b";
echo "<hr>";

$parity = ($b % 2 == 0) ? "even" : "dont even";
echo "$b is $parity";
echo "<hr>";

$result = $a?? $b?? $c;
echo "abc $result";
echo "<br>";

$result = $c?? $b?? $a;
echo "cba $result";
echo "<br>";