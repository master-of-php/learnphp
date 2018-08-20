<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/10/18
 * Time: 10:00 AM
 */
$filestream = fopen('manifesto.txt', 'r') or die("'don't read file");

while (!feof($filestream)){
    echo fgets($filestream)."<br>";
}

fclose($filestream);
?>