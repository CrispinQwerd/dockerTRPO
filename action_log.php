<?php
session_start();
require_once("dbconnect.php");

    $login = $_GET['login'];
    $password = $_GET['password'];
    $login = mb_strtolower($login);
    
    $mysql = "SELECT * FROM user WHERE login LIKE '%$login%'";
    $result = $dbcon->query($mysql);
    while($myrow=$result->fetch_array())
    { 
        if($password==$myrow['pass'])
        {
            $inter++;
            $_SESSION['name'] = $myrow['name'];
            $_SESSION['login'] = "correct";
            $_SESSION['login_name'] = "$login";
            $_SESSION['photo'] = $myrow['avatar'];
            
        
             header("Location: index.php");
            exit();
        }
    }



    
     header("Location: login.php");


?>