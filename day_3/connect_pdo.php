<?php
$username="root";
$password="";
$hostname="localhost";
try{
    $dbconnect = new pdo ("mysql:host=$hostname;dbname=myDB",$username, $password);
     $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Connection failed ; " .$e->getMessage();
}


?>