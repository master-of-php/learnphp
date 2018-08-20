<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/3/18
 * Time: 11:41 PM
 */
$a = $b = 5;
echo "start values a = $a, b = $b<br>";

function modify($val, &$ref){
    echo "transmitted values $val, $ref<br>";

    $val++;
    $ref++;
    echo "incremented values $val, $ref<br>";
}
modify($a, $b);
echo "current values a = $a, b = $b<br>";


?>