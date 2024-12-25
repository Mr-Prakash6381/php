<?php 
$username="root";
$password="";
$hostname="localhost";
$dbconnect = mysqli_connect($hostname,$username,$password);
if(! $dbconnect){
    die("Connection failed :". mysqli_connect_error());
}
echo "Connected successfully";

?>