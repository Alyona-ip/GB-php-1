<?php

include "../config/config.php";

function getProducts($connect){
    $sql = "select * from goods";
    $res = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($res);

    for($i = 0; $i < $count; $i++){
        $good = mysqli_fetch_assoc($res);
        $goods[] = $good;
    }

    return $goods;
}

function getProduct($connect, $id){
    $sql= "select * from goods where id=$id";
    $res = mysqli_query($connect,$sql);
    return mysqli_fetch_assoc($res);
}

function editProduct($connect, $id, $title, $price, $color, $size, $material){
    $sql = "UPDATE `goods` SET `title` = '$title', `price` = '$price', `color` = '$color', `size` = '$size', `material` = '$material'  WHERE `goods`.`id` = $id;";
    if(mysqli_query($connect,$sql)){
        return'1'; //Статус успеха
    } else {
        return '2'; //Статус ошибки
    }
}

function deleteProduct($connect, $id){
    $sql = "DELETE FROM `goods` WHERE `id` = $id;";
    if(mysqli_query($connect,$sql)){
        return'1'; //Статус успеха
    } else {
        return '2'; //Статус ошибки
    }
}

function addProduct($connect, $title, $price, $color, $size, $material){
    $sql = "INSERT INTO `goods` (`id`, `title`, `color`, `size`, `material`, `price`, `img-front`, `img-back`) VALUES (NULL, '$title', '$color', '$size', '$material', '$price', '', '');";
    if(mysqli_query($connect,$sql)){
        return'1'; //Статус успеха
    } else {
        return '2'; //Статус ошибки
    }
}