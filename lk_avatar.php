<?php
session_start();
require_once("dbconnect.php");

                if(isset($_POST['download']))
                {
                    
                    //$new_file=$_SESSION['login_name'] . $_FILES['uploadfile']['name'];

                    $errors=array();

                    $file_name  = $_FILES['uploadfile']['name'];
                   // $file_size = $_FILES['avatar']['size'];
                  //echo '<pre>' . print_r($_FILES) . '</pre>';
                    $file_tmp  = "images/".$file_name; 
                 // echo $_FILES['uploadfile']['name'];
                   //echo "<br>fsgthefrhj<br>";
                    //echo $file_tmp;
                   // $file_type = $_FILES['avatar']['type'];

                    if (!move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file_tmp))
                    {
                          //  header("Location: lk_index.php");
            
                    }
                  //  rename ("images/".$file_name."","images/".$new_file."");
                    $_SESSION['photo'] = $file_name;
              
                   $mysql = "UPDATE user
                   SET avatar  = '" .$file_name . "'
                   WHERE login = '" .$_SESSION['login_name']. "'";
            
                   $result = $dbcon->query($mysql);
                   
                   $mysql = "SELECT avatar
                   FROM user  
                   WHERE (login = '" . $_SESSION['login']. "');";
                    $result = $dbcon->query($mysql);
                    if(!$result)
                    {
                        echo "14143";
                    }
                   if($myrow25 = $result->fetch_assoc())
                   {
                    $_SESSION['photo'] = $myrow25['avatar'];
                 
                   }

               
           
            
        
                   } 
        
                
            
                   header("Location: lk_index.php");
                 
        
                    
                            
                        

                        

   ?>         

        

