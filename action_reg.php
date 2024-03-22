<?php
session_start();
require_once("dbconnect.php");

$username = $_POST['username'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_check = $_POST['password_check'];
$login = mb_strtolower($login);

$mysql = "SELECT * FROM user WHERE login LIKE '%$login%'";
$result = $dbcon->query($mysql);
while($myrow=$result->fetch_array())
{ 
    if($login==$myrow['login'])
    {
        $inter++;
    }
}


if(!$inter)
{
     if($password == $password_check)
        {

        if(!empty($username) && !empty($login) && !empty($password))
        {
            $mysql = "INSERT INTO user(name, login, pass) VALUES('$username', '$login', '$password');";
            $result = $dbcon->query($mysql);
            $_SESSION['registration'] = "registration_completed";
        }
        else
        {
            $_SESSION['registration'] = "pole_empty";
        }
        }

        else
          {
             $_SESSION['registration'] =  "password_incorrect";
          }
    
}   
    else
    {
        $_SESSION['registration'] =  "login_incorrent";
    }


    if(!$result)
    {
      die("Ошибка выполнения запроса. $dbcon->error;");
     
    }



    header("Location: registration.php");
?>