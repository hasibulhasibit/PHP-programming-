<?php
/**
*Determines if the argument is even or odd, 
* you can hide function code use -" include_once "folder / file " .
*/

include_once "Functions.php";
/*
$x = 12;

if (isEven($x)){//argument
 echo " {$x} is an even number";
} else {
    echo"{$x} is an odd number";
}

$x = "5";

echo "Factorial of {$x} is ".factorial($x);

$ft = "Tea";
$n ="";
serve($ft,);

// function return Type.
function sum ( int $x,int $y,int $z):int {
    return $x+$y+$z;
}
echo sum (5,8,9);
**/
// unlimited arguments

function sum(int ...$numbers):int {
    $result = 0;
    for($i=0;$i<count($numbers);$i++){
          $result += $numbers[$i];
    }
    return $result;
}
echo sum (5,8,9,4);


