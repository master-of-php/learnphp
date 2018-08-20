<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/10/18
 * Time: 10:07 AM
 */

$filestream = fopen('title.txt', 'r') or die('dont open for read file');

while ($char = fgetc($filestream)){
    echo $char."*";
}
?>