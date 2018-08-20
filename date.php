<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/7/18
 * Time: 2:11 AM
 */
echo "date: ".date('jS F Y').'<br>';
echo "date of week: ".date('l')."<br>";
echo 'time: '.date('h: i: s a').'<br>';
echo  "time belt: ".date_default_timezone_get().'<hr>';

date_default_timezone_set('Europe/Kiev');
echo "current time belt: ".date_default_timezone_get();
echo '<br>current time: '.date('h: i: s').'<hr>';

$d = strtotime('tomorrow');
echo "tomorrow<:".date('l, jS F Y', $d).'<br>';

$d = strtotime('August 18, 1979');
echo "Michail's birthday: ".date('jS F Y', $d).'<br>';
?>