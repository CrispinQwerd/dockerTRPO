<?php
require_once("dbconnect.php");
$name = $_POST['name'];

if(!empty($name))
{
    $mysql = "INSERT INTO City(name),City(area),City(population) VALUES('".$name."');";
    $result=$dbcon->query($mysql);
}

if(!$result)
{
    die("Ошибка выполнения запроса: $dbcon->error");
}

if ($myrow = $result->fetch_array())
{
echo $myrow['name'];
}
?>
<a href="index.php">Назад</a>