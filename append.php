<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/11/18
 * Time: 11:43 PM
 */
$info = "\r\n\r\n\tБаллада Рэдингской тюрьмы";
$info .= "\r\n\r\n\tОскар Уальдб 1898";

$filename = "poem.txt";

$filestream = fopen($filename, 'a') or die("dont open file");

$num = fwrite($filestream, $info);

if($num){
    echo "$num byte added to file $filename";
}
fclose($filestream);
?>