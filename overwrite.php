<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/11/18
 * Time: 11:49 PM
 */
$filestream = fopen("poem.txt",'w') or die("dont possible open file");

fwrite($filestream, "file rewrited");
fclose($filestream);

?>