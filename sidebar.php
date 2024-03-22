<?php
require_once("dbconnect.php");
 ?>
<link rel=stylesheet type="text/css" href="css/sidebar.css">
<div class = "sidebar">
    <?php
        $mysql = "SELECT id, name FROM region";
        $result = $dbcon->query($mysql);

        if ($result->num_rows > 0) 
        {
          while ($row = $result->fetch_assoc()) 
          {
            echo '<a href="?region=' . $row["id"] . '">' . $row["name"] . '</a><br>';
          }
        } 
        else 
        {
          echo "Нет результатов";
        }
      ?>

</div>


