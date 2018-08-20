<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 29.07.18
 * Time: 2:21
 */
for ($i = 1; $i < 4; $i++) {
    for ($j = 1; $j < 4; $j++) {
        if (($i == 1) && ($j == 1)){
            echo "continue when i = $i and j = $j<br>";
            continue;
        }


        if (($i == 2) && ($j == 1)) {
            echo "break inside cicle when i = $i and j = $j<br>";
            break;
        }
        echo "i = $i j = $j<br>";
    }
}
?>