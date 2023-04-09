<?php
$host = "127.0.0.1";
$port = 3306;
$username = "root";
$password = "";
$database = "stairs";

$con=mysqli_connect($host,$username,$password,$database);
mysqli_query($con,"set names 'utf8'");


if($con->connect_error){

die("connection Failed!".$con->connect_error);



}

$db = new PDO("mysql:host=$host;port=$port",
               $username,
               $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>