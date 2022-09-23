<?php
/*
function printN($i){
    if ($i>=10){
        return;
    }
    echo $i. "\n";
    $i++;
    printN($i);
}
printN(1);

//if you print 21-36 

function printNumber($counter,$end){
    if($counter>$end){
        return;
}
echo $counter."\n";
$counter++;
printNumber($counter,$end);
}
printNumber(21,36);
**/
//stepping
function printNumber($counter,$end,$steeping=1){
    if($counter>$end){
        return;
}
echo $counter."\n";
$counter+= $steeping;
printNumber($counter,$end);
}
printNumber(21,36,2);