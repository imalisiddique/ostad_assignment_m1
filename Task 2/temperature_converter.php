<?php 

// Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.

// (80°F − 32) × 5/9 = 26.667°C

// (80°C × 9/5) + 32 = 176°F


$input = 80;

function calculateC(){
    global $input;
    $result = (($input - 32) * (5/9));
    return $result . " Celsius";
}

function calculateF(){
    global $input;
    $result = (($input * 1.8) +32);
    return $result . " Fahrenheit";
}

echo calculateC();
// echo calculateF();