<?php 
$days = array('Monday','Tuesday','Wendsday');
$csv_list = implode(', ', $days);

echo $csv_list;

$csv_list = explode(', ', $csv_list);
echo "$csv_list";

$makers = array('ZAZ', 'VAS', 'AAS' );
echo"<br>";
sort($makers);

foreach ($makers as $value) {
	echo "<br> $value";
}

echo "<br>";
$cars = array('KIA' => 'Soul', 'Toyota' => 'Avensis', 'vv' => 'passat');
ksort($cars);
foreach ($cars as $key => $value) {
	echo "key [$key] value [$value] <br>";
}
asort($cars);

foreach ($cars as $key => $value) {
	echo "key [$key] value [$value] <br>";
}

$num = count($cars);
echo "count for cars array is: $num";
?>