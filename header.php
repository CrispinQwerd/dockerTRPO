<?php
 require_once("dbconnect.php");
        if(isset($_GET['header']))
        {
            $header= $_GET['header'];
            include "$header";
        }
        else
{
    ?>  
<link rel=stylesheet type="text/css" href="css/style.css">

<div class = "crqd">
   <a href="index.php"> <img src=logo/logo.png width = "150px" height = "150px" id="logo"></a>
</div>

        <div class="wrd">
    
        <?php
            if($_SESSION['login'] != "correct")
            {
                
                echo "<a href='?header=registration.php'>Регистрация </a>";
                echo "<a href='?header=login.php'> Авторизация</a>";
            }

            else
            {
                $login_name = $_SESSION['login_name'];
                echo "Здравствуйте  <b>$login_name</b><br>";
                echo "<a href = 'lk_index.php'>Войти в личный кабинет</a><br><br>";
                echo "<a href = 'exit.php'><button>Выйти</button></a>";
            }
            ?>
        </div>

<?php
}
?>
