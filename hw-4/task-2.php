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
        $photos = scandir('small');
        for ($i = 3; $i < count($photos); $i++) {
    ?>

    <a target="_blank" href="big/<?=$photos[$i] ?>"><img class="gallery_img" src="small/<?= $photos[$i] ?>" alt="<?=$photos[$i] ?>"></a>

    <?php 
        }
    ?>
        
</div>

</body>
</html>