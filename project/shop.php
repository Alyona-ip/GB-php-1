<?php
    include "config.php";
    $sql= "select * from goods";
    $res = mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="container">
    <?php 
        include "header.php";
    ?>

    <div class="goods">

    <?php
        while($good = mysqli_fetch_assoc($res)):
    ?>
        <div class="goods_item">
            <div class="goods_img">
                <a class="goods_link" href="product.php?id=<?=$good['id'] ?>"><img class="goods_img" src="img/<?=$good['img-front'] ?>" alt="<?=$good['img-front'] ?>"></a>
            </div>
            <div class="goods_info">
                <h2 class="subsitle"><a class="subsitle_link" href="product.php?id=<?=$good['id'] ?>"><?=$good['title'] ?></a></h2>
                <h2 class="subsitle"><a class="subsitle_link" href="product.php?id=<?=$good['id'] ?>">&#36;<?=$good['price'] ?> USD</a></h2>
            </div>
        </div> <!-- product_item -->
    <?php 
        endwhile 
    ?>

    </div> <!-- products -->

</div> <!-- container -->

</body>
</html>