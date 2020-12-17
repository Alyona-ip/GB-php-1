<?php

include "config.php";
$author = strip_tags($_POST['author']);
$text = strip_tags($_POST['text']);

$sql = "INSERT INTO `reviews` (`id`, `author`, `date`, `text`) VALUES (NULL, '$author', CURRENT_TIMESTAMP, '$text')";

if(mysqli_query($connect,$sql)){
    header("Location: reviews.php?status=1");
} else {
    header("Location: reviews.php?status=2");
}
