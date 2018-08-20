<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/3/18
 * Time: 11:50 PM
 */

function drink($tmp = "hot", $flavor = "tea"){
echo "drink $tmp $flavor<br>";
}

function add (...$numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    echo "<hr>count of numbers are $total<br>";
}

drink();
drink("cold");
drink("iced","lemonad");
add(1,2,3,4,5);
?>