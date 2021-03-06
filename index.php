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
function translate($str){
    $ua = ['a'=>'а', 'b'=>'б', 'v'=>'в'];
    $arr = str_split($str, 1);
    $newStr = '';
    foreach($ua as $key=>$elem){
        foreach($arr as $elem1){
            if($elem1 === $key){
                $newStr .= $elem;
            }
        }
    }
    return $newStr;
}
function happyTicket(){
    $arr = [];
    for($i=1000; $i<=999999; $i++){
        $arr = str_split($i, 1);
        $sum1 = array_sum(array_splice($arr, -3, 3));
        $sum2 = array_sum(array_splice($arr, -3, 3));
        if($sum1 == $sum2){
            echo $i.'<br>';
        }
    }
}
function cut($str, $num = 10){
    $newStr = substr($str, 0, $num);
    return $newStr;
}
function last($arr){
    echo array_shift($arr).'<br>';
    if(!empty($arr)){
        last($arr);
    }
}
function sumSimple($num){
    $sum = array_sum(str_split($num, 1));
    echo $sum.'<br>';
    if($sum > 10){
        sumSimple($sum);
    }
}
?>

<?php

class User{
	public $name;
	public $age;

	public function setAge($age){
		if($this->isAgeCorrect($age)){
			return $this->age = $age;
		}
	}
	public function addAge($year){
		$newAge = $this->age + $year;
		if($this->isAgeCorrect($newAge)){
			return $this->age = $newAge;
		}
	}
	private function isAgeCorrect($age){
		return $age>=18 and $age<=60;
	}
}

$user = new User;
$user->setAge(20);
echo $user->age;
$user->addAge(50);
echo $user->age;
