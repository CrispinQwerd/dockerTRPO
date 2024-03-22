<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Мирзамагамедов lab 13</title>
    <link rel=stylesheet type="text/css" href="css/login_style.css">
</head>
<body>
<?php

?>
<div class = "crqd">
   <a href="index.php"> <img src=logo/logo.png width = "150px" height = "150px" id="logo"></a>
</div>

<div class = "loglog">
<form method = "GET" action = "action_log.php">
    Логин:
	<input class="input" type= "text" name = "login"  required><br> 
    Пароль:
	<input class="input" type= "password" name = "password" required><br> 
    
    <input type = "submit" value = "Войти" name = "login_button">
</form>

<?php

    if($_SESSION['login'] == "correct")
    {
        echo "Авторизация успешно завершена!<br><br>";
       
    }

    if($_SESSION['login'] == "login_incorrect")
    {
        echo "Неверный логин или пароль<br><br>";
    }


?>
<a href='?header=registration.php'>Нет аккаута?</a>
<br><a href = "index.php">На главную!</a>
</div>
</body>
</html>
