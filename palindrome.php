<?php

function palindrome($input){

    $reverse = strrev($input);

    if ( strtolower($reverse) == strtolower($input)) {
        return true;
    } else return false;


}
 $input = "Laral" ;
$result = palindrome($input);

if ($result == true) {
    echo $input." is a palindrome";
} else echo $input. " is not a palidrome";

