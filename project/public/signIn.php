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

    <div class="sign_in">

        <h1 class="title_page">Sign in</h1>

        <div class="form">
            <div class="form_item">
                <form class="form_table width428" action="#" method="post" enctype="multipart/form-data">
                    <label class="form_input form_email"><span>Email</span><input class="form_text" name="email" type="email"></label> <br> <br> <br>
                    <label class="form_input"><span>Password</span><input class="form_text" name="password" type="password"></label>

                    <input class="form_btn mt50" name="save" type="submit" value="Send">
                    <button class="form_btn mt20">Register</button>
                </form>
            </div> <!-- form_item -->
        </div> <!-- form -->

    </div> <!-- sign_in -->

</div> <!-- container -->
    
</body>
</html>