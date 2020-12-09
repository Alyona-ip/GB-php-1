<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="gallery">

    <?php
        $photos = scandir('img');
        for ($i = 3; $i < count($photos); $i++) {?>

    <a target="_blank" href="img/<?=$photos[$i] ?>"><img class="gallery_img width" src="img/<?= $photos[$i] ?>" alt="<?=$photos[$i] ?>"></a>

    <?php 
        }
    ?>
        
</div>

</body>
</html>