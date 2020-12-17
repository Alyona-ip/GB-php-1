<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    include "config.php";
    $sql= "select * from reviews";
    $res = mysqli_query($connect,$sql);
?>

<?php 
        while($reviews = mysqli_fetch_assoc($res)): ?>

<div style="border: 1px solid black;">
        <p><?=$reviews['author'] ?></p>
        <p><?=$reviews['date'] ?></p>
        <p><?=$reviews['text'] ?></p>
</div> <br>

<?php 
        endwhile ?>

<form action="reviewsServer.php" method="post" enctype="multipart/form-data">

    <label>Ваше имя<br><input name="author" type="text"></label> <br> <br>
    <label>Текст отзыва:<br><textarea name="text" cols="30" rows="10"></textarea></label> <br> <br>
    
    <input name="save" type="submit" value="Отправить">

</form>


</body>
</html>