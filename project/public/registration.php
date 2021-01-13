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

    <div class="register">
    
        <h1 class="title_page">Register</h1>

        <form action="#" class="register_form">

            <div class="register_form_inputs">

                <div class="register_form_block">
                    <div class="register_form_item">
                        <label class="refister_label"><span>Name</span><input class="register_input" name="name" type="text"></label>
                    </div>
                </div>

                <div class="register_form_block">
                    <div class="register_form_item">
                        <label class="refister_label"><span>Password</span><input class="register_input" name="password" type="password"></label>
                    </div>
                </div>

                <div class="register_form_block">
                    <div class="register_form_item">
                        <label class="refister_label"><span>Email</span><input class="register_input" name="email" type="email"></label>
                    </div>
                </div>

            </div> <!-- register_form_inputs -->

            <div class="register_form_btn">
                <input class="register_btn" name="save" type="submit" value="Register">
                <input class="register_btn" name="save" type="reset" value="Cancel">
            </div>
            
        </form>
    
    </div> <!-- register -->

</div> <!-- container -->
    
</body>
</html>