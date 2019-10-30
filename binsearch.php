<?php
ini_set("memory_limit", "512M");
$rustart = getrusage();
$stack = [];

for ($i = 1; $i < 5000000; $i += 1) {
    $stack[] = $i;
}
$operationIndex = 0;
echo "<h3>Binary search</h3><br>Search: ";
echo binarySearch($stack, 4999999, $operationIndex);
echo "<br>Operation count: " . $operationIndex;

// Script end
function rutime($ru, $rus, $index) {
    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
}

$ru = getrusage();
echo "<br><br><br>";
echo "This process used " . (rutime($ru, $rustart, "utime")/1000) .
    " s for its computations\n";

function binarySearch($array, $search, &$operationIndex)
{
    $low = 0;
    $height = count($array) - 1;

    while ($low <= $height) {
		$operationIndex++;
        $middle = floor(($low + $height) / 2);
        if ($search == $array[$middle]) {
            return (int)$middle;
        }
        
        if ($search < $array[$middle]) {
            $height = $middle - 1;
        } else if ($search > $array[$middle]) {
            $low = $middle + 1;
        }
    }
	
	return null;
}
