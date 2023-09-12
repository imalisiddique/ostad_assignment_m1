<?php

// Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.

$number = 123;
$check = $number % 2;

// var_dump($check);

if ($check == 0){
    echo "{$number} is Even number";
}else {
    echo "{$number} is Odd number";
}
