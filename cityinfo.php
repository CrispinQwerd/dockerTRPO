<?php
require_once("dbconnect.php");
?>
  <link rel=stylesheet type="text/css" href="css/cityinfo.css">
<?php
if(isset($_GET['city_name'])) 
{
    $city_name = $_GET['city_name'];

    $mysql = "SELECT *, city.name as city_name, region.name AS region_name FROM city INNER JOIN region ON city.region = region.id WHERE city.name = '$city_name'";
    $result = $dbcon->query($mysql);

    echo "<div class = 'cityinfo'>";
    
    if ($result) 
    {
        $myrow = $result->fetch_assoc();

        echo "<div class = 'citylogo'>
        <img src='logos/{$myrow['logo']}'>
        </div>";
echo "<div class = 'namedesc'>";
        echo "<div class = 'citynamename'>
        {$myrow['city_name']}<br>
        </div>";
       
        echo "<div class = 'citydesc'>
        {$myrow['description']}<br>
        </div>";
echo  "</div>";
    } 
      else 
      {
          die("Ошибка выполнения запроса: " . $dbcon->error);
      }
    
} 

  else 
  {
      echo "Город не выбран";
  }
?>

  
</div>
<div class ="button">
<form action="index.php">
    <button>Закрыть</button>
</form>
</div>

<?php

?>