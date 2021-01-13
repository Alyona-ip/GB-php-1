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

    <div class="cart">

        <h1 class="title_page">Cart</h1>

        <div class="cart_description">
            <span class="cart_description_title">Image</span>
            <span class="cart_description_title">Product</span>
            <span class="cart_description_title">Price</span>
            <span class="cart_description_title">Qty</span>
            <span class="cart_description_title">Subtotal</span>
            <span class="cart_description_title">Delete</span>
        </div>

        <form action="#" class="cart_form">

            <div class="cart_item">
                <img class="cart_img" src="img/1-1.jpg" alt="photo">
                <div class="cart_product_description">
                    <p class="cart_description_txt">Double-Breasted Long Wool Coat</p>
                    <p class="subsitle"> Ivory/One size</p>
                </div>
                <p class="cart_description_txt">&#36;80.00 USD</p>
                <p class="cart_description_txt">1</p>
                <p class="cart_description_txt">&#36;80.00 USD</p>
                <div class="cart_item_btn">
                    <button class="cart_description_btn">Delete</button>
                </div>
            </div> <!-- cart_item -->

            <div class="cart_block">
                <p class="subsitle">Total: <b>&#36;80.00 USD</b></p>
            </div>

            <div class="cart_block">
                <input class="cart_btn" type="submit" value="Buy">
            </div>

        </form> <!-- cart_form -->
        
    </div> <!-- cart -->

</div> <!-- container -->

</body>
</html>