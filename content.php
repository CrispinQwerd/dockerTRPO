<?php
require_once("dbconnect.php");  
if(isset($_GET['content'])){
    $content= $_GET['content'];
    include "$content";
}
else
{
    if(isset($_GET['region'])) 
    {
                    $mysql = "SELECT *, city.name as city_name, region.name AS region_name FROM city INNER JOIN region ON city.region = region.id WHERE region.id = {$_GET['region']} ORDER BY city.id DESC LIMIT 5";
    
                    $result = $dbcon->query($mysql);
    
                    if ($result) 
                    {
                ?>
                        <div class="all">
                <?php
                        while ($myrow = $result->fetch_array()) 
                        {
                ?>
                            <div class="block">
                                <div class="logo">
                                <a href="?content=cityinfo.php&city_name=<?php echo $myrow['city_name'];?>"><img src="logos/<?php echo $myrow['logo']; ?>"></a>
                                </div>
    
                                <div class="blockblock">
                                    <div class="cityname">
                                    <a href="?content=cityinfo.php&city_name=<?php echo $myrow['city_name'];?>"><?php echo $myrow['city_name']; ?></a>
                                    </div>
    
                                    <div class="regionname">
                                        <?php echo $myrow['region_name']; ?>
                                    </div>
    
                                    <div class="description">
                                        <p><?php echo $myrow['description']; ?></p>
                                        
                                    </div>
                                </div>
                            </div>
    
                <?php
                        }
                ?>
    
                        </div>
                <?php
                    } 
                    else 
                    {
                        die("Ошибка выполнения запроса: " . $dbcon->error);
                    }
                }
      
        
                        else
                    {
                        $mysql = "SELECT *, city.name as city_name, region.name AS region_name FROM city INNER JOIN region ON city.region = region.id ORDER BY city.id DESC LIMIT 5";
    
                        $result = $dbcon->query($mysql);
        
                        if ($result) {
                    ?>
                            <div class="all">
                    <?php
                            while ($myrow = $result->fetch_array()) 
                            {
                    ?>
                                <div class="block">
                                    <div class="logo">

                                    <a href="?content=cityinfo.php&city_name=<?php echo $myrow['city_name'];?>"><img src="logos/<?php echo $myrow['logo']; ?>"></a>

                                    </div>
        
                                    <div class="blockblock">
                                        <div class="cityname">
                                          <a href="?content=cityinfo.php&city_name=<?php echo $myrow['city_name'];?>"><?php echo $myrow['city_name']; ?></a>
                                        </div>
        
                                        <div class="regionname">
                                            <?php echo $myrow['region_name']; ?>
                                        </div>
        
                                        <div class="description">
                                            <p><?php echo $myrow['description']; ?></p>
                                        </div>
                                    </div>
                                </div>
        
                    <?php
                            }
                    ?>
        
                            </div>
                    <?php
    
                        } 
                        
                        else 
                        {
                            die("Ошибка выполнения запроса: " . $dbcon->error);
                        }
                    }
    
}
?>

