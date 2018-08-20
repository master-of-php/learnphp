<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/13/18
 * Time: 1:57 PM
 */
$hdr = '<h1 style="color: red">PHP for beginners</h1>';
echo "no filter hdr: " . $hdr . "<hr>";
$hdr = filter_var($hdr, FILTER_SANITIZE_STRING);

echo "filtered hdr: <br><br>" . $hdr . "<br><br><hr>";

function validate($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "valid email: $email";
    } else {
        echo "invalid email: $email";

    }
}

$email = "test @email.com";
validate($email);
echo "<br>";
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
validate($email);
?>