<?php 
$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1>$num2 && $num1>$num3){
    echo "$num1 is largest";
}else if($num2>$num1 && $num2>$num3){
    echo "$num2 is largest";
}else if($num3>$num1 && $num3>$num2){
    echo "$num3 is largest";
}