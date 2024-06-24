<?php
$array = array(12, 45, 10, 25);

$sum = array_sum($array);

$average = $sum / count($array);

rsort($array);

echo "Array (sorted in reverse order): ";
print_r($array);
echo "<br>";

echo "Sum: " . $sum . "<br>";
echo "Average: " . $average . "<br>";
?>
