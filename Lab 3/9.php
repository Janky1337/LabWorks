<?php
//Step1
$array = [];
for ($i = 1; $i <= 8; $i++) {
    $array[] = str_repeat('x', $i);
}
echo implode("\n", $array);

//Step 2
function arrayFill($val, $len) {
    return array_fill(0, $len, $val);
}

echo "\n" . implode(",", arrayfill("#", 5));

//Step 3
$array2D = [[1, 2, 3],[4, 5, 6], [7, 8, 9]];
function sum2DArray($arr){
    $sum = 0;
    foreach ($arr as $subArray) {
        $sum += array_sum($subArray);
    }
    return $sum;
}
echo "\n" . sum2DArray($array2D);

//Step 4
$array2DTheSecond = [];
$step = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $array2DTheSecond[$i][$j] = $step++;
    }
}

//Step 5
$array2 = [2, 5, 3, 9];
$result = ($array2[0] * $array2[1]) + ($array2[2] * $array2[3]);
echo "\n" . $result;

//Step 6
$user = ['name' => 'Иван','surname' => 'Иванов','patronymic' => 'Иванович'];
echo "{$user['surname']} {$user['name']} {$user['patronymic']}\n";

//Step 7
$date = ['year' => 2025,'month' => 3,'day' => 21];
echo "\n" ." ".$date['year']." ".$date['month']." ".$date['day'];

//Step 8
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "\n" . count($arr);

//Step 9
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[0] ." ". $arr[count($arr)-1];