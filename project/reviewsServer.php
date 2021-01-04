<?php

include "config.php";
$author = strip_tags($_POST['author']);
$text = strip_tags($_POST['text']);
$mark = (int)strip_tags($_POST['mark']);

if($mark == 1 || $mark == 2 || $mark == 3 || $mark == 4 ||$mark == 5){
    $sql = "INSERT INTO `reviews` (`id`, `author`, `date`, `mark`, `text`) VALUES (NULL, '$author', CURRENT_TIMESTAMP, '$mark', '$text')";

    if(mysqli_query($connect,$sql)){
        header("Location: reviews.php?status=1");
    } else {
        header("Location: reviews.php?status=2");
    }
} else{
    header("Location: reviews.php?status=2");
}


