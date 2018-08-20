<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/4/18
 * Time: 11:35 PM
 */
function supply () : array {
    return array(75, 4.13, 'SUPER PHP', True);
}

$array = supply();

foreach ($array as $item) {
    echo "$item <br>";
}

?>