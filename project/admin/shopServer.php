<?php

include "../config.php";

$action = $_GET['action'];
$id = $_GET['id'];
$title = strip_tags($_POST['title']);
$price = strip_tags($_POST['price']);
$color = strip_tags($_POST['color']);
$size = strip_tags($_POST['size']);
$material = strip_tags($_POST['material']);

if($action == "save"){
    $sql = "UPDATE `goods` SET `title` = '$title', `price` = '$price', `color` = '$color', `size` = '$size', `material` = '$material'  WHERE `goods`.`id` = $id;";
    if(mysqli_query($connect,$sql)){
        header("Location: index.php?status=1");
    }
} elseif($action == "delete"){
    $sql = "DELETE FROM `goods` WHERE `id` = $id;";
    if(mysqli_query($connect,$sql)){
        header("Location: index.php?status=2");
    }
} elseif ($action == "add"){
    $sql = "INSERT INTO `goods` (`id`, `title`, `color`, `size`, `material`, `price`, `img-front`, `img-back`) VALUES (NULL, '$title', '$color', '$size', '$material', '$price', '', '');";
    if(mysqli_query($connect,$sql)){
        header("Location: index.php?status=3");
    }
}

//title=$title color=$color size=$size material=$material