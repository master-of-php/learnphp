<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/15/18
 * Time: 11:15 PM
 */

date_default_timezone_set('UTC');
$time = date(' H: i, j F ');
$user = "Mikle";

echo '
<form action="hidden_handler.php" method="post">
<fieldset>
    <legend>input comment</legend>
    <textarea rows="5" cols="20" name="comment">   
    </textarea>
    <input type="hidden" name="user" value="'. $user. ' ">
    <input type="hidden" name="time" value="'. $time. ' ">
</fieldset>
<p><input type="submit"></p>
</form>';
?>