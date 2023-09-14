<form method="post" action="">

    <label for="bangla">Number in Bangla</label><br>
    <input type="number" name="bangla" min="0" max="100" required><br>

     <label for="english">Number in English</label><br>
    <input type="number" name="english" min="0" max="100" required><br>

     <label for="math">Number in Math</label><br>
    <input type="number" name="math" min="0" max="100" required><br><br>


    <input type="submit" value="Submit">

</form>


<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $bangla = $_POST["bangla"];
    $english = $_POST["english"];
    $math = $_POST["math"];

    $average = (int) (  ( $bangla + $english + $math ) / 3 );

    switch ( $average ) {
    case $average >= 80 && $average <= 100:
        echo "Your total average number {$average} and Grade: A";
        break;

    case $average >= 60 && $average <= 79:
        echo "Your total average number {$average} and Grade: B";
        break;

    case $average >= 50 && $average <= 59:
        echo "Your total average number {$average} and Grade: C";
        break;

    case $average >= 33 && $average <= 49:
        echo "Your total average number {$average} and Grade: D";
        break;

    case $average <= 32:
        echo "Your total average number {$average} and Grade: F";
        break;
    }

}
