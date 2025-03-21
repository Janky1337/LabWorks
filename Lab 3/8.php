<?php
//Step 1
function increaseEnthusiasm($inp){
    return $inp . "!";
}

//Step 2
echo "\n" . increaseEnthusiasm("Поехали скорее");

//Step3
function repeatThreeTimes($inp){
    return $inp . $inp . $inp;
}

//Step4
echo "\n" . increaseEnthusiasm(repeatThreeTimes("Поехали скорее"));

//Step5
function cut($str, $len = 10){
    return subst($str, 0, $len);
}

//Step6
$array = [0, 1, 2, 3, 4, 5];
function recursiveArrayPrint($arr, $step = 0){
    if ($step < count($arr)){
        echo "\n" . $arr[$step];
        recursiveArrayPrint($arr, $step+1);
    }
}
recursiveArrayPrint($array);

//Step7
function sumDigits($in){
    $sum = array_sum(str_split($in));
    if ($sum>9){
        return sumDigits($sum);
    }
    return $sum;
}