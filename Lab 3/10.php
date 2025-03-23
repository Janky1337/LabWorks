<?php
//Step 1
function SumCheck($a, $b){
    return ($a+$b>10);
}

//Step 2
function EqualCheck($a, $b){
    return ($a==$b);
}

//Step 3
$test = 0; 
echo $test==0;

//Step 4
$age = 56;
if ($age>99 or $age<10){
    echo "\nВозраст больше 99 или меньше 10";
}
else{
    if (array_sum(str_split($age)) <= 9){
        echo "\nСумма цифр числа однозначна";
    }
    else{
        echo "\nСумма цифр числа двухзначна";
    }
}

//Step 5
$arr = [1, 4, 6];
if (count($arr) == 3){
    echo "\n" . array_sum($arr);
}