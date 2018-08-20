<?php
echo "WEB SERVER: ".$_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "SCRIPT: ".$_SERVER['PHP_SELF'];
echo "<br>";
echo "host's name ".$_SERVER['HTTP_HOST'];
echo "<br>";
$test = ['1' => '1', '2' => '2', '3' => '3'];

foreach ($_GET as $key => $value) {
	echo "<br>";
	echo $key.' '.$value;
}
//http://localhost:8000/supers.php/?name=vasiliy&version=1
?>