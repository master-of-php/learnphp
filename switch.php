<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 29.07.18
 * Time: 0:14
 */
$number = 2;
$letter = "B";

switch ($number){
    case 1: echo "one   <br>";break;
    case 2: echo "two   <br>";break;
    case 3: echo "three <br>";break;
    default: echo "unknown number";
}

switch ($letter){
    case A: echo "letter A<br>";break;
    case B: echo "letter B<br>";break;
    case C: echo "letter C<br>";break;
    default: echo "unknown letter";
}

switch ($number){
    case 0:
    case 1:
    case 2: echo " <3";break;
    default: echo "3 or >3";
}