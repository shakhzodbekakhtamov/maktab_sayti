<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/private/function.php');
    noauth();
    $us = new UserLogin();
    $ror = $us -> sign_in($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" required autofocus>
        <?php if(@$ror['login'] == 'empty'): ?>                       
        <p class="error"><font color = "red"> * Iltimos loginni kiriting. </font></p>
        <?php endif; ?>
        <input type="password" name="password" required>
        <?php if(@$ror['password'] == 'empty'): ?>                       
        <p class="error"><font color = "red"> * Iltimos parolni kiriting. </font></p>
        <?php endif; ?>
        <input id="save" type="checkbox" name="save" value="on" checked><label for="save">eslab qolish</label>
        <input type="submit" value="Send">
    </form>
</body>
</html>