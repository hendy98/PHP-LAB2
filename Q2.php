<?php

$number = 123;
$formattedString = sprintf("Number: %d", $number);
echo $formattedString."<br>";  


$input = "123 456";
sscanf($input, "%d %d", $number1, $number2);
echo $number1."<br>";  
echo $number2."<br>";  


$string = "Hello, World!";
$modifiedString = str_ireplace("world", "ahmed", $string);
echo $modifiedString."<br>";  


?>