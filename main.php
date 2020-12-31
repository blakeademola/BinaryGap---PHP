<?php
function solution($N){ //$N is an integer
 
//convert $N to binary
$binary = decbin($N); 
$zero=0;
$stack = [];
$list = str_split($binary); //convert string to array for iteration
 foreach ( $list as $key=>$bin){
  
  /*for any element in array equals 1, push the $zero counter into the $stack and re-initiliaze $zero back to 0
  e.g for 100001001 for every 1 found, push 0 into the stack and then continue incrementing $zero till it comes across another 1. 
  By then, $zero would have been incremented to a certain count before the next 1 is found */
  
 if($list[$key] == 1){ 
    $stack[]=$zero;
    $zero=0; 
    continue; //break out of the current loop so that $zero doesn't get incremented at this point
   }
 $zero++;
 }
 return max($stack);
}

