<?php
$filestream = fopen(index.html, r);
$data = array('PHP', 1, 2.3, TRUE, NULL, array(), new Directory, $filestream);

foreach ($filestream as $value) {
	var_dump($value);
	echo "<br>";
}

foreach ($data as $value) {
	var_dump($value);
	echo "<br> ";
}

fclose($filestream);
echo gettype($filestream);
?>