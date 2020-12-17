<?php

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
    if ($num2 == 0) {
        return "второе число не может быть 0";
    } else {
        return $num1 / $num2;
    }
};


if($_POST['operation'] == "+") {
    $res = sum($_POST['arg1'], $_POST['arg2']);
} elseif($_POST['operation'] == "-") {
    $res = minus($_POST['arg1'], $_POST['arg2']);
} elseif($_POST['operation'] == "*") {
    $res = multiply($_POST['arg1'], $_POST['arg2']);
} else {
    $res = divide($_POST['arg1'], $_POST['arg2']);
}

header("Location: task".$_GET['task'].".php?result=$res");