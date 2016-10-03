<?php
$host = "us-cdbr-azure-southcentral-f.cloudapp.net";
$db_name = "sports";
$username = "b2c71b9da35067";
$password = "b30031a5";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>