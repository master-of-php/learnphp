<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/3/18
 * Time: 11:31 PM
 */

function hello(){
    echo "hello user<br>";
}

hello();


function outer() {
    echo "outer function<br>";
    function inner(){
        echo "inner function";
    }
}
#outer();
inner();

?>