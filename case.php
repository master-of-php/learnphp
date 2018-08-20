<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/7/18
 * Time: 1:27 AM
 */
$str = "C++ Programming in easy steps";
echo "source string: '$str' <hr>";

$ver = strtolower($str);
echo "lover case words: '$ver' <br>";


$ver = strtoupper($str);
echo "upper case words: '$ver' <br>";

$ver = ucfirst(strtolower($str));
echo "upper case first word: '$ver' <br>";
echo "upper case each word: ". ucwords($ver);




?>