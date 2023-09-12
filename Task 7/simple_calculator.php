<?php 

// Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.

$input1 = 45;
$input2 = 2;

$operation = "division";

switch ($operation) {

    case 'addition':
        $result = $input1 + $input2;
        echo $result;
        break;

    case 'subtraction':
        $result = $input1 - $input2;
        echo $result;
        break;

    case 'multiplication':
        $result = $input1 * $input2;
        echo $result;
        break;

    case 'division':
        $result = $input1 / $input2;
        echo $result;
        break;
    
    default:
        echo "NA";
        break;
}