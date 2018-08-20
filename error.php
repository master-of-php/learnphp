<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/12/18
 * Time: 12:31 AM
 */

function error_handler ($level, $message){
    switch ($level){
        case 2: $str = "attention!"; break;
        case 8: $str = "warning"; break;
        default: $str = "error";
    }

    echo "<b>$str</b><br>$message<hr>";
}

set_error_handler('error_handler');

echo($var);
$file = fopen("error.txt", 'r');

$number = 2;
if($number >= 1) {
    trigger_error('$number will be 1 or less');
}

?>