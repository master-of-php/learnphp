<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/10/18
 * Time: 10:25 AM
 */
$poem = "\r\n\tНет, не смотрел никто из нас ";
$poem .= "\r\n\tС такой тоской в глазах ";
$poem .= "\r\n\tНа лоскуток голубизны ";
$poem .= "\r\n\tВ тюремных небесах ";

$filename = "poem.txt";

$filestream = fopen($filename, 'w') or die("dont open file") ;
$num = fwrite($filestream, $poem);

if($num){
    echo "$num byte writed to file $filename";
}

fclose($filestream);
?>