<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 29.07.18
 * Time: 1:56
 */

for ($i = 1; $i < 4;$i++) {
    echo "<dt>outside loop iteration $i<br>";

    for ($j = 1; $j < 4; $j++) {
        echo "<dd>inside loop iteration $j<br>";
    }


}