<?php

include "../models/reviews.php";

$author = strip_tags($_POST['author']);
$text = strip_tags($_POST['text']);
$mark = (int)strip_tags($_POST['mark']);

$status = createReview($connect, $author, $text, $mark);

header("Location: ../public/reviews.php?status=$status");