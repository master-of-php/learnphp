<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/4/18
 * Time: 1:58 PM
 */

$number = 1;
echo "global number: $number<br>";

function show_local() {
    $number = 100;
    echo "local number: $number<hr>";
}

show_local();

function recur(){
    global $number ; static $letter = 'A';
    if ($number <= 14) {
        echo "$number $letter|";
        $number++;
        $letter++;

        recur();
    }
}

recur();

echo "<br>global $number <hr>";
echo "from globals array".$GLOBALS['number'];
?>