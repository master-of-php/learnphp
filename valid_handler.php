<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/13/18
 * Time: 12:59 PM
 */
if(!empty($_POST['quantity'])){
    $quantity = $_POST['quantity'];
    if(!is_numeric($quantity)){
        $quantity = null;
        echo "quantty will be is number<br>";
    }

}
else{
    $quantity = null;
    echo "need input quantity<br>";
}

if(!empty($_POST['email'])){
    $email = $_POST['email'];

    $pattern = '/\b[\w. -]+@[\w. -]+\.[A-Za-z]{2,6}\b/';
    if (!preg_match($pattern, $email)){
        $email = null;
        echo 'email format is wrong';
    }
}
else{
    $email = null;
    echo "enter email";
}

if (($quantity!= null) && ($email!= null)){
    echo "email: $email<br>";
    echo "quantity: $quantity";
}
?>