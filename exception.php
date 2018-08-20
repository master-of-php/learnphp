<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/12/18
 * Time: 9:07 AM
 */

function check_size($num) {
    if($num < 10) {
        throw new Exception("number $num will be more then 10");
    }
}

try{
    check_size(5);
}catch (Exception $e){
    echo "<b>exception by size</b><br>";
    echo $e->getMessage()."<hr>";
}

class CustomExeption extends Exception {
    public function get_details(){
        $details = "file: ".$this->getFile()."<br>"
        ."string: ".$this->getLine()."<br>"
        ."messedge:".$this->getMessage();
        return $details;
    }
}

function check_parity($num){
    if(($num %2) !== 0) {
        throw new CustomExeption("number $num will be even");
    }
}

try{
    check_parity(5);
}
catch (CustomExeption $e){
    echo "<b>exception parity</b><br>".$e->get_details()."<hr>";
}
?>