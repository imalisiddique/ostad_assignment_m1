<?php 

// Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.

$number1 = 62;
$number2 = 45;

$compare = $number1 > $number2 ? "{$number1}" : "{$number2}";

echo $compare;