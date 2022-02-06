<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "userdb";

$conn = mysqli_connect($host,$username,$password,$database);

if(!$conn){
    die("database connection failed". mysqli_error($conn));
}else{
    //echo "database connection success";
}

?>