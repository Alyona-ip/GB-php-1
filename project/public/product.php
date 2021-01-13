<?php
    include "../models/products.php";
    $product = getProduct($connect, (int)$_GET['id']);
?>

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
        include "../templates/header.php";
    ?>

    <div class="products">

        <div class="product_item">

            <div class="product_img">
                <img class="product_image" src="img/<?=$product['img-back'] ?>" alt="<?=$product['img-back'] ?>">
            </div>

            <div class="product_info">
                <h1 class="title"><?=$product['title'] ?></h1>
                <div class="product_text">
                    <p class="subsitle width60">Price</p>
                    <p class="subsitle">&#36;<?=$product['price'] ?> USD</p>
                </div>
                <h2 class="title_h2">Product info</h2>

                <div class="product_info_block">
                    <p class="product_info_text"><b>Color</b> / <?=$product['color'] ?></p>
                    <p class="product_info_text"><b>Sizing</b> / <span class="ttu"><?=$product['size'] ?></span></p>
                    <p class="product_info_text"><b>Material</b> / <?=$product['material'] ?></p>
                </div> <!-- product_info_block -->

                <form action="#">
                    <div class="product_btn">
                        <button class="btn">Add to cart</button>
                        <button class="btn">Buy now</button>
                    </div>
                </form>
                
                
            </div> <!-- product_info -->
        </div> <!-- product_item -->

    </div> <!-- products -->

</div> <!-- container -->

</body>
</html>