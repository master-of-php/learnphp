<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/6/18
 * Time: 2:56 PM
 */
$str = 'Most Users usually find PHP useful.';
echo "$str<br> string length: ".strlen($str);

echo "<br> first input 'us':".strpos($str, 'us');
echo "<br> last input 'us':".strrpos($str, 'us');
echo "<hr>";
echo "<br> substring first input 'us': ".strstr($str, 'us');
echo "<br> substring first input without case 'us': ".stristr($str, 'us');
echo "<hr> symbols first input 'u': ".strchr($str, 'u');
echo "<hr> symbols last input 'u': ".strrchr($str, 'u');
?>