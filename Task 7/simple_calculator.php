<form method="post" action="">

    <label for="number1">Number 01</label><br>
    <input type="number" name="number1" required><br>

    <label for="number2">Number 02</label><br>
    <input type="number" name="number2" required><br>

    <label for="number2">Select your operation</label><br>
    <select for="" name="operation">

        <option value="addition">Addition</option>
        <option value="Subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>

    </select><br><br>

    <input type="submit" value="Submit">

</form>

<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $operation = $_POST["operation"];

    switch ( $operation ) {

    case 'addition':
        $result = $number1 + $number2;
        echo $result;
        break;

    case 'Subtraction':
        $result = $number1 - $number2;
        echo $result;
        break;

    case 'multiplication':
        $result = $number1 * $number2;
        echo $result;
        break;

    case 'division':
        $result = ( $number2 != 0 ) ? ( $number1 / $number2 ) : "Can't divide by zero";
        echo $result;
        break;

    }

}
