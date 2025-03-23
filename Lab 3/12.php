<?php
//Step 1
$arr = [1,15,76,25];
echo array_sum($arr) / count($arr);

//Step 2
echo 100*(100+1)/2;

//Step 3
$arr2 = [1024, 625, 81, 100, 451];
echo array_map('sqrt', $arr2);

//Step 4
$keys = range('a', 'z');
$values = range(1,26);
$arr3 = array_combine($keys, $values);
print_r($arr3);

//Step 5
$inp = '1234567890';
$inpArr = str_split($inp,2);
echo array_sum($inpArr);