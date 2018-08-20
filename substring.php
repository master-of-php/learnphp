<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/7/18
 * Time: 1:19 AM
 */
$str = 'SQL in easy steps features SQL queries';
echo "'$str'<br>'SQL' counter: ".substr_count($str, 'SQL');
echo '<hr> position 27: '.substr($str, 27);
echo '<hr> position 4 lenght 13: '.substr($str, 4, 13);
$sub = 'PHP & MySQL';

$str = substr_replace($str, $sub, 0,3);
echo "<hr>'$str'";
?>