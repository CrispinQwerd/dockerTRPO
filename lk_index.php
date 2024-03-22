<?php
session_start();
require_once("dbconnect.php");
    
?>
<!DOCTYPE html>
<html>
<link rel=stylesheet type="text/css" href="css/lk_style.css">
<head>    

    <title>Мирзамагамедов lab 14</title>

</head>

<body id="main">
<div id ="header">
<div class = "crqd">
   <a href="index.php"> <img src=logo/logo.png width = "150px" height = "150px" id="logo"></a>
</div>


    <div id="wrd">
    
    <?php
    
        if($_SESSION['login'] != "correct")
        {
            echo "<a href = 'registration.php'>Регистрация</a>";
            echo " ";
            echo "<a href = 'login.php'>Авторизация</a>";
        }

        else
        {
            $login_name = $_SESSION['login_name'];
            echo "Добро пожаловать в личный кабинет,<b>$login_name!</b><br><br>";
            echo "<a href = 'index.php'><button>Выход из личного кабинета</button></a>";
        }
    ?>

        </div>
  </div>
  <div id="page">
        <div id ="content">

                <?php
             
                if($_SESSION['login'] == "correct")
                {
                
                    $name = $_SESSION['name'];
                    echo "Ваш логин: $login_name<br>";
                    echo "Ваше имя: $name<br>";

                    ?> 

                        <div id = "avatar">
                        <form action="lk_avatar.php" method="POST" enctype= "multipart/form-data">
                        <input type = "file" name="uploadfile" value = "Обзор"><br><br>
                        <input type = "submit" name="download" value = "Загрузить"><br><br>
                    
                        </form>
                        
                    
                    <?php
                     //   echo '<pre>' . print_r($_FILES) . '</pre>';
             

                            $avatar  = $_SESSION['photo'];
                            echo "<img src='images/$avatar' width='150'>";
                          //  echo '<pre>' . print_r($_FILES) . '</pre>';
                          //  echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
                        
                        

                        ?>
                        </div>
                        <?php
                    include ("lk.php");

                    ?>
                  
                    
             <?php
             
                }

                else
                {
                    echo "Для просмотра информации авторизуйтесь.";
                }

                
                ?>
        </div>
    </div>


</body>

</html>