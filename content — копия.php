<link rel=stylesheet type="text/css" href="css/content.css">
<?php
if(isset($_GET['region']))
                {
                    $mysql = "SELECT *, city.name as city_name, region.name AS region_name FROM city INNER JOIN region ON city.region = region.id WHERE region.id = {$_GET['region']} ORDER BY city.id DESC LIMIT 5";
    
                    $result = $dbcon->query($mysql);
    
                    if ($result) 
                    {
                        echo "<div style='display: flex; flex-direction: column;'>"; // flex-direction: column
        
                        while ($myrow = $result->fetch_array()) 
                        {
                            echo "<div style='margin: 10px; padding: 10px; width: 500px; display: flex;'>";
        
                            echo "<div style='width:fit-content; height:205px; border-left: 1px solid black; border-bottom: 1px solid black; border-top: 1px solid black;padding: 5px; text-align: center;'>
                                <a href='cityinfo.php?city_name={$myrow['city_name']}''> <img src='logos/{$myrow['logo']} '> </a>
                                </div>";
        
                            echo "<div style='display:block; width:fit-content; height:fit-content; border: 1px solid black; text-align: center;'>
                                    <div style='display: inline-block; width:fit-content; height:fit-content; padding: 10px;'>
                                    <a href='cityinfo.php?city_name={$myrow['city_name']}'>{$myrow['city_name']}</a>

                                    </div>
                                    <div style='display: inline-block; width:fit-content; height:fit-content; border-left: 1px solid black; padding: 10px;'>
                                        {$myrow['region_name']}
                                    </div>
                                    <div style='width:400px; height:176px; border-top: 1px solid black; text-align: justify;'>
                                        <p>{$myrow['description']}</p>
                                    </div>
                                </div>";
        
                            echo "</div>";
                        }
        
                        echo "</div>";
        
                    } else 
                    {
                        die("Ошибка выполнения запроса: $dbcon->error");
                    }
    
                }
    
    
                    else
                {
                    $mysql = "SELECT *, city.name as city_name, region.name AS region_name FROM city INNER JOIN region ON city.region = region.id ORDER BY city.id DESC LIMIT 5";
    
                    $result = $dbcon->query($mysql);
    
                    if ($result) 
                    {
                        echo "<div style='display: flex; flex-direction: column;'>"; // flex-direction: column
        
                        while ($myrow = $result->fetch_array()) 
                        {
                            echo "<div style='margin: 10px; padding: 10px; width: 500px; display: flex;'>";
        
                            echo "<div style='width:fit-content; height:205px; border-left: 1px solid black; border-bottom: 1px solid black; border-top: 1px solid black;padding: 5px; text-align: center;'>
                                <a href='cityinfo.php?city_name={$myrow['city_name']}''> <img src='logos/{$myrow['logo']} '> </a>
                                </div>";
        
                            echo "<div style='display:block; width:fit-content; height:fit-content; border: 1px solid black; text-align: center;'>
                                    <div style='display: inline-block; width:fit-content; height:fit-content; padding: 10px;'>
                                    <a href='cityinfo.php?city_name={$myrow['city_name']}'>{$myrow['city_name']}</a>

                                    </div>
                                    <div style='display: inline-block; width:fit-content; height:fit-content; border-left: 1px solid black; padding: 10px;'>
                                        {$myrow['region_name']}
                                    </div>
                                    <div style='width:400px; height:176px; border-top: 1px solid black; text-align: justify;'>
                                        <p>{$myrow['description']}</p>
                                    </div>
                                </div>";
        
                            echo "</div>";
                        }
        
                        echo "</div>";
        
                    } else 
                    {
                        die("Ошибка выполнения запроса: $dbcon->error");
                    }
                }
 ?>