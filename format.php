<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/7/18
 * Time: 1:38 AM
 */
$str = '| PHP Strinh Fun |';
echo "source string: $str";
echo '<hr> reverse string'.strrev($str);
echo '<hr> repeat string'.str_repeat($str, 3);
echo '<hr> cut string'.trim($str, '|');

$pad = str_pad($str, 30, '*', STR_PAD_LEFT );
echo "<hr>insert symbols: $pad";

echo "<hr> split string: ";
$tocken = strtok($str, ' ');
while ($tocken){
    echo "$tocken ...";
    $tocken = strtok(' ');
}
?>