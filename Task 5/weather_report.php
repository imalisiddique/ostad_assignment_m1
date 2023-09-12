<?php 

$temp = 101;

if ($temp >= 33){
    echo "It's warm.";
}elseif ($temp >= 5 && $temp <= 32) {
    echo "It's cool.";
}elseif ($temp <= 4){
    echo "It's freezing!";
}

