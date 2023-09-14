<form method="post" action="">

    <label for="number1">Number 01</label><br>
    <input type="number" name="number1" required><br>

    <label for="number2">Number 02</label><br>
    <input type="number" name="number2" required><br><br>

    <input type="submit" value="Compare">

</form>

<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $compare = $number1 > $number2 ? "{$number1} is large number" : "{$number2} is large number";

    echo $compare;

}