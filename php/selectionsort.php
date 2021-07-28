<?php
ini_set("memory_limit", "512M");
$rustart = getrusage();
$array = [];

for ($i = 10; $i >= 0; $i--) {
    $array[] = $i;
}
//$operationIndex = 0;
echo "<h3>Selection sort</h3>";
print_r($array);
echo "<br>";
print_r(selectionSort($array));

// Script end
function rutime($ru, $rus, $index) {
    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
}

$ru = getrusage();
echo "<br><br><br>";
echo "This process used " . (rutime($ru, $rustart, "utime")/1000) .
    " s for its computations\n";

function selectionSort($array)
{
	$arraySize = count($array);
	for ($i = 0; $i < $arraySize; $i++) {
		$min = $i;
		for ($j = $i+1; $j < $arraySize; $j++) {
			if ($array[$j] < $array[$min]) {
				$min = $j;
			}
			$temp = $array[$min];
			$array[$min] = $array[$i];
			$array[$i] = $temp;
		}
	}
	return $array;
}
