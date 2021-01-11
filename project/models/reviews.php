<?php

include "../config/config.php";

function getReviews($connect){
    $sql= "select * from reviews";
    $res = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($res);

    for($i = 0; $i < $count; $i++){
        $review = mysqli_fetch_assoc($res);
        $reviews[] = $review;
    }

    return $reviews;

}

function createReview ($connect, $author, $text, $mark){
    if($mark == 1 || $mark == 2 || $mark == 3 || $mark == 4 ||$mark == 5){
        $sql = "INSERT INTO `reviews` (`id`, `author`, `date`, `mark`, `text`) VALUES (NULL, '$author', CURRENT_TIMESTAMP, '$mark', '$text')";
        if(mysqli_query($connect,$sql)){
            return'1'; //Статус успеха
        } else {
            return '2'; //Статус ошибки
        }
    } else {
        return '2'; //Статус ошибки
    }
}