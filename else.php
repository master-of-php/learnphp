<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 29.07.18
 * Time: 0:03
 */
if(4 > 2){echo "<p>yes 4 more then 2<br>";}
if((4 > 2) && (8 > 4)) {echo "<p>4 > 2 and 8 > 4<br>";}

if(4 > 8){
    echo "<p>yes 4 > 8<br>";
}
else {
    echo "<p>yes 4 < 8<br>";
}

if(4 > 8){
    echo "<p>yes 4 > 8<br>";
}
elseif (8 > 4) {
    echo "<p>8 > 4 its true<br>";
}
else {
    echo "<p>all conditions are false<br>";
}