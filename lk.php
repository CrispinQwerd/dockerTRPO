<link rel=stylesheet type="text/css" href="css/password_check.css">

<div class = "lk">
<h2>Изменение пароля:</h2>
<form method = "POST" action = "action_lk.php">
    Введите старый пароль:
	<input class="input" type= "password" name = "password" required>  <br> <br>
    Введите новый пароль:
	<input class="input" type= "password" name = "new_password" required><br> <br> 
    Подтвердите новый пароль:
	<input class="input" type= "password" name = "check_new_password" required><br> <br>

    <input type = "submit" value = "Сменить пароль" name = "input_button"><br> <br>
</form>
<?php

if($_SESSION['lk_auth'] == "lk_auth_completed")
{
    echo "Пароль успешно изменён<br><br>"; 
}

if($_SESSION['lk_auth'] == "pole_empty")
{
    echo "Вы ничего не ввели<br><br>";
}

if($_SESSION['lk_auth'] == "lk_auth_incorrect")
{
    echo "Неверно введён старый пароль";    
}
if($_SESSION["lk_auth"] == "password_incorrect")
{
    echo "Старый пароль совпадает с новым!";    
}
if($_SESSION['lk_auth'] == "lk_auth_new_incorrect")
{
    echo "Новый пароль не совпадает с проверкой!";    
}



?>
</div>