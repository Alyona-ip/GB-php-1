<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="photo">

        <?php
            include "config.php";
            $id = $_GET['id'];

            $sqlCountUpdate = "update images set count=count+1 where id=$id";
            $resCountUpdate = mysqli_query($connect,$sqlCountUpdate);
            
            $sqlCount= "select count from images where id=$id";
            $resCount = mysqli_query($connect,$sqlCount);
            $count = mysqli_fetch_assoc($resCount);

            $sql= "select * from images where id=$id";
            $res = mysqli_query($connect,$sql);
            $data = mysqli_fetch_assoc($res);

        ?>

        <img class="gallery_img width_1400" src="big/<?=$data['name']  ?>" alt="photo <?=$data['name'] ?>">
        <div class="photo_txt">
            <p class="photo_txt_p" >Просмотры: <?=$count['count'] ?></p>
            <a href="<?= $_SERVER['HTTP_REFERER']?>">Назад</a>
        </div>
    </div>

</body>
</html>