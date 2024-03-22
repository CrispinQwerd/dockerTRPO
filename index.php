<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>    
    <title>Мирзамагамедов lab 15</title>
    <link rel=stylesheet type="text/css" href="css/style.css">
    <link rel=stylesheet type="text/css" href="css/content.css">
    <link rel=stylesheet type="text/css" href="css/cityinfo.css">
</head>

<body class="main">
<?php
require_once("dbconnect.php");
echo "<div class = 'header'>";

include("header.php");
echo "</div>";

?>

<div id="page">
        <div id="content">

            <?php

                if($_SESSION['login'] == "correct")
                {
                    include("bdindex.php");

                }
                else
                {
                    
                    include("content.php");
                    
                    if(!isset($_GET['city_name']))
                    {
                        include("sidebar.php");
                    }
                  
                }
                   

            ?>

        </div>




</body>

</html>