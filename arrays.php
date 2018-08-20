<?php
$months['jan'] = "January";
$months['feb'] = "February";
$months['mar'] = "March";

$months2 = array('apr'=> 'April','may' => 'May', 'jun' => 'June');
echo $months['mar'];
echo " ";
echo $months2['jun'];

$days = array('Monday','Tuesday','Wendsday');

foreach ($days as $value) {
	echo "&bull; $value;";
}
foreach ($months2 as $key => $value) {
	echo " $value ";
}

echo "<dl>";
foreach ($months as $key => $value) {
	echo "<dt>$key<dd>$value";
}
echo "</dl>";
?>