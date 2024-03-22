<?php  
        $dbcon = new mysqli("localhost","root","","p_21");
        if($mysqli->connect_errno)
        {
            printf("Не удалось подключиться!");
            exit();
        }
?>