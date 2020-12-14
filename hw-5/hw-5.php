<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "config.php";
    $sql= "select * from images order by count desc";
    $res = mysqli_query($connect,$sql);

?>


<div class="gallery">

    <?php
        while($data = mysqli_fetch_assoc($res)) :
    ?>

    <a href="full_img.php?id=<?=$data['id'] ?>"><img class="gallery_img" src="small/<?=$data['name']  ?>" alt="photo <?=$data['name'] ?>"></a>

    <?php 
        endwhile;
    ?>
        
</div>

</body>
</html>