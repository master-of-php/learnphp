<?php 
$letters = array('A', 'B', 'C');
$numbers = array('1', '2', '3');

$matrix = array('abs' => $letters, '123' => $numbers);

foreach ($matrix as $key => $currentArray) {
	echo "<br>key= $key value = $currentArray";
		foreach ($currentArray as $key => $value) {
			echo "<br>key= $key value = $value";
		}
}
echo "<br> gettype array matrix:".gettype($matrix)."<br>";
echo "<br> var_dump array matrix:".var_dump($matrix);
?>