<?php
function isNumberInRange($num){
    if($num > 0 and $num<=10){
        return true;
    } else {
        return false;
    }
}
function getDigitsSum($num){
    $sum = 0;
    $arr = str_split($num, 1);
    foreach($arr as $elem){
        $sum += $elem;
    }
    return $sum;
}
function isEven($num){
    if($num%2 == 0){
        return true;
    } else {
        return false;
    }
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$newArr = [];
foreach($arr as $elem){
    if(isEven($elem)){
        $newArr[] = $elem;
    }
}
function getDivisors($num){
    $arrDivisors = [];
    for($i=1; $i<=$num; $i++){
        if($num%$i == 0){
            $arrDivisors[] = $i;
        }
    }
    return $arrDivisors;
}
function getCommonDivisors($num1, $num2){
    $arr = [];
    foreach(getDivisors($num1) as $elem1){
        foreach(getDivisors($num2) as $elem2){
            if($elem1 == $elem2){
                $arr[] = $elem1;
            }
        }
    }
    return $arr;
}
var_dump(getCommonDivisors(10, 20));