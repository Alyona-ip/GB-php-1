<?php
    include "../config.php";
    $id = $_GET['id'];
    $sql = "select * from goods where id=$id";
    $res = mysqli_query($connect,$sql);
    $product = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
<div class="container">
    <?php 
        include "header.php";
    ?>

    <div class="products">

        <form action="#">

            <div class="product_item">

                <div class="product_img">
                    <img class="product_image" src="../img/<?=$product['img-back'] ?>" alt="<?=$product['img-back'] ?>">
                </div>

                <div class="product_info">
                    <h1 class="title">Title: <input class="edit_input" type="text" value="<?=$product['title'] ?>"></h1>
                    <div class="product_text">
                        <p class="subsitle width60">Price</p>
                        <input id="price_<?=$data['id'] ?>" class="edit_input" type="text" value="<?=$product['price'] ?>">
                        <p class="subsitle">USD</p>
                    </div>
                    <h2 class="title_h2">Product info</h2>

                    <div class="product_info_block">
                        <p class="product_info_text"><b>Color</b> <input class="edit_input" type="text" value="<?=$product['color'] ?>"></p>
                        <p class="product_info_text"><b>Sizing</b> <input class="edit_input" type="text" value="<?=$product['size'] ?>"></p>
                        <p class="product_info_text"><b>Material</b> <input class="edit_input" type="text" value="<?=$product['material'] ?>"></p>
                    </div> <!-- product_info_block -->

                    <div class="product_btn edit_buttons">
                        <a href="shopServer.php?action=save&id=<?=$id ?>" class="btn edit_btn">Save</a>
                    </div>
                    
                </div> <!-- product_info -->
            </div> <!-- product_item -->

        </form>

    </div> <!-- products -->

</div> <!-- container -->

</body>
</html>