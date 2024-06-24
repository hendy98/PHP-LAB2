<?php
$array = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);

// a) Ascending order sort by value
asort($array);
echo nl2br("Ascending order sort by value:\n");
print_r($array);

$array = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);

// b) Ascending order sort by key
ksort($array);
echo nl2br("\nAscending order sort by key:\n");
print_r($array);

$array = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);

// c) Descending order sort by value
arsort($array);
echo nl2br("\nDescending order sort by value:\n");
print_r($array);

$array = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);

// d) Descending order sort by key
krsort($array);
echo nl2br("\nDescending order sort by key:\n");
print_r($array);
?>
