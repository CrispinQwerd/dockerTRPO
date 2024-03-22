<?php
session_start();
require_once("dbconnect.php");

$password = $_POST['password'];
$new_password = $_POST['new_password'];
$check_new_password = $_POST['check_new_password'];
$login = $_SESSION['login_name'];



$mysql_select = "SELECT pass FROM user WHERE login = '$login'";
$result_select = $dbcon->query($mysql_select);

if ($result_select->num_rows > 0) 
{
    $myrow = $result_select->fetch_assoc();
    
    // Пароль существует
    if ($password == $myrow['pass']) 
    {
        if ($new_password == $check_new_password) 
        {
            if (!empty($password) && !empty($new_password) && !empty($check_new_password)) 
            {
                if ($password != $new_password) 
                {
                    $mysql_update = "UPDATE user SET pass = '$new_password' WHERE login = '$login'";
                    $result_update = $dbcon->query($mysql_update);

                    if ($result_update) 
                    {
                        $_SESSION['lk_auth'] = "lk_auth_completed";
                        $_SESSION['name'] = "$name";
                    } else 
                    {
                        $_SESSION['lk_auth'] = "lk_auth_incorrect";
                    }
                } 
                else 
                {
                    $_SESSION['lk_auth'] = "password_incorrect";
                }
            } 
            else 
            {
                $_SESSION['lk_auth'] = "pole_empty";
            }
        } 
        else 
        {
            $_SESSION['lk_auth'] = "lk_auth_new_incorrect";
        }
    } 
    else 
    {
        $_SESSION['lk_auth'] = "lk_auth_incorrect";
    }
} 
else 
{
    $_SESSION['lk_auth'] = "login_incorrent";
}



header("Location: lk_index.php");
?>
