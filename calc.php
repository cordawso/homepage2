<?php

$num1 = $_POST ["num1"];
$num2 = $_POST ["num2"];
$operation = $_POST ["operations"];

if ($operation == "add") 
{
	$answer_add = num1 + num2;
	echo num1." + ".num2." = ";
	echo $answer_add;
}

if ($operation == "subtract") 
{
	$answer_subtract = num1 - num2;
	echo num1." - ".num2." = ";
	echo $answer_subtract;
}

if ($operation == "multiply") 
{
	$answer_multiply = num1 * num2;
	echo num1." * ".num2." = ";
	echo $answer_multiply;
}

if ($operation == "divide") 
{
	$answer_divide = num1 / num2;
	echo num1." / ".num2." = ";
	echo $answer_divide;
}
?>