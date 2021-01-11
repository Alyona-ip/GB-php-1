<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/style/style.css">
</head>
<body>
    
<div class="container">
    <?php 
        include "../templates/editHeader.php";
    ?>

    <div class="products">

        <form action="../models/productsServer.php?action=add" method="post" enctype="multipart/form-data">

            <div class="edit_product_item">

                <div class="product_info">
                    <p class="product_info_text"><b class="edit_width">Title</b> <input class="edit_input" name="title" type="text"></p>
                    <p class="product_info_text"><b class="edit_width">Price</b> <input class="edit_input" name="price" type="text"></p>
                    <p class="product_info_text"><b class="edit_width">Color</b> <input class="edit_input" name="color"type="text"></p>
                    <p class="product_info_text"><b class="edit_width">Sizing</b> <input class="edit_input" name="size"type="text"></p>
                    <p class="product_info_text"><b class="edit_width">Material</b> <input class="edit_input" name="material"type="text"></p>

                    <div class="product_btn edit_buttons">
                        <input class="btn edit_btn" type="submit" value="Save">
                    </div>
                    
                </div> <!-- product_info -->

            </div> <!-- product_item -->

        </form>

    </div> <!-- products -->

</div> <!-- container -->

</body>
</html>