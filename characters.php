<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/6/18
 * Time: 10:59 AM
 */
$str1 = 'PHP for beginners';
$str2 = 'PHP for beginners';
$str3 = 'PHP For beginners';
$str4 = 'php for beginners';

echo "str1 with str2: ".strcmp($str1, $str2).'<br>';
echo "str1 with str3: ".strcmp($str1, $str3).'<br>';
echo "str1 with str4: ".strcmp($str1, $str4).'<br>';


echo "<hr> equals without case"."<br>";
echo "str1 with str4: ".strcasecmp($str1, $str4)."<br>";

$total = 0;

for ($i = 0 ; $i<strlen($str1) ; $i++){
    $total += ord(str1[$i]);
}
echo "total: $total";
?>