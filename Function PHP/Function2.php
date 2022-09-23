<?php
/**
*Determines if the argument is even or odd, 
* you can hide function code use -" include_once "folder / file " .
*/

include_once "Functions.php";

$x = 12;

if (isEven($x)){//argument
 echo " {$x} is an even number";
} else {
    echo"{$x} is an odd number";
}

$x = "5";

echo "Factorial of {$x} is ".factorial($x);
