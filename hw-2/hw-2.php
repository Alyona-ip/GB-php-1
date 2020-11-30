<h3>Задание 1</h3>

<?php

// #1

$a = 10;
$b = 20;

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
};
?>

<hr>
<h3>Задание 2</h3>

<?php

// #2

$a = rand(0,10);
echo "a = $a <br>";

switch ($a) {
    case 0:
        echo $a++;
    case 1:
        echo $a++;
    case 2:
        echo $a++;
    case 3:
        echo $a++;
    case 4:
        echo $a++;
    case 5:
        echo $a++;
    case 6:
        echo $a++;
    case 7:
        echo $a++;
    case 8:
        echo $a++;
    case 9:
        echo $a++;
    case 10:
        echo $a++;
        break;
    default:
        echo "Ошибка";
        break;
};
?>

<hr>
<h3> Задание 3 и 4</h3>

<?php

// #3

function sum($num1, $num2) {
    return $num1 + $num2;
};
function minus($num1, $num2) {
    return $num1 - $num2;
};
function multiply($num1, $num2) {
    return $num1 * $num2;
};
function divide($num1, $num2) {
    return $num1 / $num2;
};

// #4

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            return sum($arg1, $arg2);
            break;     
        case "-":
            return minus($arg1, $arg2);
            break;
        case "*":
            return multiply($arg1, $arg2);
            break;
        case "/":
            return divide($arg1, $arg2);
            break;
        default:
            return false;
            break;
    };
};

$arg1 = rand(0,100);
$arg2 = rand(0,100);
$operation = "+";

$res = mathOperation($arg1, $arg2, $operation);
echo !$res ? "Ошибка" : "$arg1 $operation $arg2 = " . $res;

?>

<hr>
<h3>Задание 6</h3>

<?php

// #6

function power($val, $pow) {
    if($pow == 1) {
        return $val;
    } elseif ($pow == 0) {
        return 1;
    } else {
        return $val*power($val, --$pow);
    }
}

$val = rand(0,10);
$pow = rand(0,10);


echo "$val в степени $pow = " . power($val,$pow);

?>

<hr>
<h3>Задание 7</h3>

<?php

// #7

$hours = date("H");
$minutes = date("i");


if($hours == 11|| $hours == 12 || $hours == 13 || $hours == 14){
    $res = "$hours часов";
} elseif ($hours%10 == 1) {
    $res =  "$hours час";
} elseif ($hours%10 == 2 || $hours%10 == 3 || $hours%10 == 4) {
    $res = "$hours часа";
} else {
    $res = "$hours часов";
}

if($minutes == 11|| $minutes == 12 || $minutes == 13 || $minutes == 14){
    $res .= " $minutes минут";
} elseif ($minutes%10 == 1) {
    $res .= " $minutes минута";
} elseif ($minutes%10 == 2 || $minutes%10 == 3 || $minutes%10 == 4) {
    $res .= " $minutes минуты";
} else {
    $res .= " $minutes минут";
}

echo $res;