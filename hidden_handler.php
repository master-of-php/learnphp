<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/15/18
 * Time: 11:28 PM
 */

if (!empty($_POST['comment'])) {
    $comment = $_POST['comment'];
} else {
    $comment = null;
    echo "need input comment";
}

$user = (!isset($_POST['user'])) ? null : $_POST['user'];
$time = (!isset($_POST['time'])) ? null : $_POST['time'];

if (($comment!=null)&&($time!= null)&&($user!=null)){
    echo "<p>comment resived:\" $comment \" <br>
from $user at $time
</p>";
}
?>