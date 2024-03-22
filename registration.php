<!DOCTYPE html>
<html>
<head>
    <title>Мирзамагамедов lab 13</title>
    <link rel="stylesheet" type="text/css" href="css/reg_style.css">

</head>
<body>



<div class = "crqd">
   <a href="index.php"> <img src=logo/logo.png width = "150px" height = "150px" id="logo"></a>
</div>

<div class = "regreg">
<form method="POST" action="action_reg.php">
    Имя пользователя:
    <input class="input" type="text" name="username" required> <br>
    Логин:
    <input class="input" type="text" name="login" required><br> 
    Пароль:
    <input class="input" type="password" name="password" required><br>
    Подтвердите пароль:
    <input class="input" type="password" name="password_check" required><br> 
    <input type="submit" value="Зарегистрироваться" name="input_button"><br> 
</form>


<?php
if ($_SESSION['registration'] == "registration_completed") {
    echo "Регистрация успешно завершена!<br><br>";
}

if ($_SESSION['registration'] == "password_incorrect") {
    echo "Пароли не сходятся<br><br>";
}

if ($_SESSION['registration'] == "pole_empty") {
    echo "Вы ничего не ввели<br><br>";
}

if ($_SESSION['registration'] == "login_incorrent") {
    echo "Такой логин уже присутствует!<br><br>";
}
?>

<a href='?header=login.php'>Уже есть аккаунт?</a>
</div>
</body>
</html>
