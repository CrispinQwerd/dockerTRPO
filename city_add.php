<?php
require_once("dbconnect.php");

$name = $_POST['name'];
$reg_id = $_POST['region'];
$area = $_POST['area'];
$population = $_POST['population'];
$description = $_POST['description'];

if (!empty($name)) 
{
    $mysql = "INSERT INTO city (name, region , area, population, description) VALUES ('$name','$reg_id', '$area', '$population', '$description')";
    $result = $dbcon->query($mysql);

    if (!$result) 
    {
        die("Ошибка выполнения запроса: " . $dbcon->error);
    }

}
else
{
    echo "Имя города не указано";
}

header("Location:index.php");
?>