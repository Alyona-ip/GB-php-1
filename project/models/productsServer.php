<?php

include "../models/products.php";

$action = $_GET['action'];
$id = (int)$_GET['id'];
$title = strip_tags($_POST['title']);
$price = strip_tags($_POST['price']);
$color = strip_tags($_POST['color']);
$size = strip_tags($_POST['size']);
$material = strip_tags($_POST['material']);
$status = "2"; //Статус ошибки

if($action == "edit"){
    $status = editProduct($connect, $id, $title, $price, $color, $size, $material);
} elseif($action == "delete"){
    $status = deleteProduct($connect, $id);
} elseif ($action == "add"){
    $status = addProduct($connect, $title, $price, $color, $size, $material);
}

header("Location: ../admin/index.php?status=$status");