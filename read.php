<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/10/18
 * Time: 9:44 AM
 */
$filestream = fopen('manifesto.txt', 'r') or die("don't read file");

echo fread($filestream, filesize('manifesto.txt'));

fclose($filestream);
?>