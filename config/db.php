<?php
  
define("DB_HOST", "localhost:3306");
define("DB_NAME", "Dg_carcare_center");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");

try { 
  
  $dbhost = DB_HOST;
  $dbname = DB_NAME;
  $dbusername = DB_USERNAME;
  $dbpass = DB_PASSWORD;
  
 $conn = new PDO("mysql:host={$dbhost}; dbname={$dbname}", "{$dbusername}", "{$dbpass}");

 //$sql = "insert into users (name,edu, current_job) Values ('suraj  Gaikwad' , 'BCA' , '1' )";
}catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>