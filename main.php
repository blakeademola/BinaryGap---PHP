<?php
function solution($N){

$binary = decbin($N);
$zero=0;
$hasOne=false;
$stack = [];
$list = str_split($binary);
 foreach ( $list as $key=>$bin){
 if($list[$key] == 1){
    $stack[]=$zero;
    $zero=0; 
    continue;
   }
 $zero++;
 }
 return $stack;
}
 print_r (max(solution(1041)));
