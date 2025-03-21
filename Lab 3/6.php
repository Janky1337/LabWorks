<?php
//Step 1
$a = 10;
$b = 3;
echo $a . " % " . $b . " = " . $a%$b;

//Step 2
if ($a % $b == 0){
    echo "\nДелится. Результат: " . $a/$b;
}
else{
    echo "\nДелится с остатком. Результат: " . $a%$b;
}

//Step 3
$st = pow(2, 10);
echo "\n" . $st;

//Step 4
echo "\n" . sqrt(245);

//Step 5
$array = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($array as $i){
    $sum += $i;
}
echo "\n" . sqrt($sum);

//Step 6
$c = sqrt(379);
echo "\n1 - " . round($c);
echo "\n0.1 - " . round($c, 1);
echo "\n0.01 - " . round($c, 2);

//Step 7
$d = sqrt(587);
$rounded = ['floor' => floor($d), 'ceil' => ceil($d)];
echo "\nОкругление в меньшую сторону - " . $rounded['floor'];
echo "\nОкругление в большую сторону - " . $rounded['ceil'];

//Step 8
$array2 = [4, -2, 5, 19, -130, 0, 10];
echo "\nMin: " . min($array2);
echo "\nMax: " . max($array2);

//Step 9
echo "\n" . rand(1, 100);

//Step 10
$array3 = [];
for ($i =0; $i<10; $i++){
    $array3[] = rand(1,100);
}
echo "\n" . implode(",", $array3);

//Step 11
$_a = 65;
$_b = 100;
echo "\n" . abs($_a-$_b);

//Step 12
$array4 = [45, -56, 13, 14, -90, -76, -11];
for ($i = 0; $i<count($array4); $i++){
    $array4[$i] = abs($array4[$i]);
}
echo "\n" . implode(",", $array4);

//Step 13
$in = 30;
$ans = [];
for ($i = 1; $i < $in; $i++){
    if ($in % $i == 0){
        $ans[] += $i;
    }
}
echo "\n" . implode(",", $ans);

//Step 14
$array5 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$stack = 0;
$step = 0;
while ($stack<=10){
    $stack += $array5[$step];
    $step++;
}
echo "\n" . $step;