<?php
function add($num1, $num2){
	$sum = $num1 + $num2;
	return $sum;
}

add(5, 6.7);

function multiply($number1, $number2){
	$result = $number1 * $number2;
	return $result;
}
function divide($number1, $number2){
	$result = $number1 / $number2;
	return $result;
}

echo multiply(divide(5,2), multiply(1, 10));
?>