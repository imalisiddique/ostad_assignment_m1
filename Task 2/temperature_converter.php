
<form action="" method="post">

    <label for="temp">Input Temperature</label><br>
    <input type="text" id="temp" name="temp" value=""><br>

    <label for="conversion">Select Conversion</label><br>

    <select name="conversion" id="conversion">
        <option value="ftoc">Fahrenheit to Celsius</option>
        <option value="ctof">Celsius to Fahrenheit</option>

    </select><br><br>

    <input type="submit" value="Submit">

</form>

<?php

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $input = $_POST["temp"];
    $conversion = $_POST["conversion"];

    if ( !empty( $input ) ) {
        switch ( $conversion ) {

        case 'ftoc':

            function calculateC() {
                global $input;
                $result = (  ( $input - 32 ) * ( 5 / 9 ) );
                return "{$input} Fahrenheit = " . $result . " Celsius";
            }
            echo calculateC();

            break;

        case 'ctof':

            function calculateF() {
                global $input;
                $result = (  ( $input * 1.8 ) + 32 );
                return "{$input} Celsius = " . $result . " Fahrenheit";
            }
            echo calculateF();
            break;
        }
    } else {
        echo "কোন ইনপুট পাওয়া যায়নি";
    }

}
