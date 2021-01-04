<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
<div class="container">
    <?php   
        include "header.php";
        include "config.php";
        $sql= "select * from reviews";
        $res = mysqli_query($connect,$sql);
    ?>

    <div class="reviews">
    <?php 
        while($reviews = mysqli_fetch_assoc($res)): ?>
        <div class="reviews_item">
            <p class="reviews_text reviews_text_gray"><?=$reviews['author'] ?></p>
            <p class="reviews_text reviews_text_gray"><?=$reviews['mark'] ?>/5</p>
            <p class="reviews_text"><?=$reviews['text'] ?></p>
            <p class="reviews_text reviews_text_gray"><b><?=$reviews['date'] ?></b></p>
        </div> <!-- reviews_item -->
    <?php 
        endwhile ?>
    </div> <!-- reviews -->

    <div class="form">
        <h2 class="form_title">Write a review</h2>
        
            <?php
                if($_GET['status'] == 2):
            ?>
            <p class="subtitle">Ошибка! Отзыв не отправлен.</p>
            <?php 
                endif 
            ?>
        <div class="form_item">
            <form class="form_table" action="reviewsServer.php" method="post" enctype="multipart/form-data">
                <label class="form_input"><span>Name</span><input class="form_text" name="author" type="text"></label> <br> <br> <br>
                <label class="form_input"><span>Mark</span><input class="form_text" name="mark" type="text"></label>
                <label class="form_input form_input_text"><span>Review</span><textarea class="form_text" name="text" cols="30" rows="10"></textarea></label>

                <input class="form_btn" name="save" type="submit" value="Send">
            </form>
        </div> <!-- form_item -->
    </div> <!-- form -->

</div> <!-- container -->



</body>
</html>