<?php
$host="localhost";
$user="kamilmwg_admin";
$pass="Database$login12";
$db="kamilmwg_login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?> 