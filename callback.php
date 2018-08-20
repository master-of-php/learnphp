<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/4/18
 * Time: 11:43 PM
 */
$hello = function ($user) {
    echo "hello $user<br>";
};

$hello("Mihail");


function greet(callable $ann){
    $ann("Kate");
}

greet($hello);

function meet(): callable {
    $time = "morning";
    return function ($name) use (&$time){
        return "good $time $name";
    };
}
$igorsGreet = meet();
echo $igorsGreet("Igor");

?>