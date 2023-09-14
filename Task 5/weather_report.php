<form method="post" action="">

    <label for="temp">Input Temperature</label><br>
    <input type="number" name="temp" max="150" required><br><br>

    <input type="submit" value="Submit">

</form>

<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $temp = $_POST["temp"];

    if ( $temp >= 33 ) {
        echo "It's warm.";
    } elseif ( $temp >= 5 && $temp <= 32 ) {
        echo "It's cool.";
    } elseif ( $temp <= 4 ) {
        echo "It's freezing!";
    } else {
        echo "Nothing";
    }

}
