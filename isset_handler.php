<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 8/13/18
 * Time: 12:44 PM
 */


if(isset($_POST['definition'])){
    $radioDefinition = $_POST['definition'];
}
else{
   $radioDefinition = null;
}

if($radioDefinition != null) {

    if($radioDefinition != 'objected'){
        echo "false php isnt $radioDefinition";
    }
    else {
        echo "true php is $radioDefinition";
    }
}
else {
    echo "need select one from each radiobutton";
}

?>