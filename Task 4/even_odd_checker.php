<form method="post" action="">

    <label for="number">Input Your Number</label><br>
    <input type="number" name="number" min="0" required><br><br>

    <input type="submit" value="Submit">

</form>


<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $number = $_POST["number"];
    $remainder = $number % 2;

    if ( $number == 0 ) {
        echo "Number is Zero";
    } elseif ( $remainder == 0 ) {
        echo "{$number} is Even number";
    } else {
        echo "{$number} is Odd number";
    }

}
