<?php 

// Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).

$input1 = 05;
$input2 = 35;
$input3 = 55;

$average = (int) (($input1 + $input2 + $input3) / 3);

 var_dump ($average) ."\n";

switch ($average) {
    case $average >= 80 && $average <=100:
        echo "A";
        break;

    case $average >= 60 && $average <=79:
        echo "B";
        break;

    case $average >= 50 && $average <=59:
        echo "C";
        break;

    case $average >= 33 && $average <=49:
        echo "D";
        break;
    
    default:
        echo "F";
        break;
}
