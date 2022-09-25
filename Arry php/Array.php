<?php
$n = "12";
// $students = array (
//     "rahim",
//     "abul",
//     "kalam",
// );

$students =[    
    "rahim",
    "abul",
    "kalam",
];// JS Type array ,

$students [] = "jamal";
array_push ($students, "korim");
array_unshift ($students, "salam");


// array loop:

$n = count ( $students);
 for ( $i = 0; $i < $n; $i++){
     echo $students[$i] . "\n";
 }

