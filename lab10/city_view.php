<link rel=stylesheet type="text/css" href="css/style.css">
<?php
if (isset($_GET['check'])) {
    require_once("dbconnect.php");

   
    $name = $_GET['city'];
    $area = $_GET['area'];
    $population = $_GET['population'];

    if (empty($name))
     {
        $mysql = "SELECT * FROM city";
        $result = $dbcon->query($mysql);

        if ($result) 
        {
            echo "Список городов:<br>";
            if($result ->num_rows)
            {
                echo "<table border = 1> <br>
                    <tr>
                    <td>Name</td>
                    <td>Area</td>
                    <td>Population</td>
                    </tr>";
            }
            while ($myrow = $result->fetch_array())
            {
                
                echo "<tr>
                <td> {$myrow['name']} </td>
                <td> {$myrow['area']}</td>
                <td  {$myrow['population']} </td>
                </tr>";
               
            }
            echo "</table>";
        } 

        else 
        {
            die("Ошибка выполнения запроса: $dbcon->error");
        }

    } 
    else 
    {
        $mysql = "SELECT * FROM city WHERE name = '. $name . '";
        $result = $dbcon->query($mysql);

        if ($result) 
        {
            if ($result->num_rows > 0) 
            {
                while ($myrow = $result->fetch_array()) 
                {
                    echo "Город: " . $myrow['name'] . "<br>";
                    echo "Площадь: " . $myrow['area'] . "<br>";
                    echo "Население: " . $myrow['population'] . "<br>";
                }
            }
            else 
            {
                echo "Город не найден";
            }
        }
        else 
        {
            die("Ошибка выполнения запроса: $dbcon->error");
        }
    }
}
?>
<br><br>
<a href="index.php">Назад</a>