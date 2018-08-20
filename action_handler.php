<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/13/18
 * Time: 1:48 AM
 */
$name = $_POST['name'];
$email= $_POST['mail'];
$comment= $_POST['comment'];

echo "<p>Thanks about comment $name</p>";
echo "<p><i>$comment</i></p>";
echo "<p>Answer will be sent to email: $email</p>";

?>