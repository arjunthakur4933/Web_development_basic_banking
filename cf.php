<?php

 
   $servername= "localhost";
   $username="root";
   $password="";
   $dbname="bank";
   
$conn = new mysqli ($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

error_reporting(E_ALL & ~E_NOTICE ^ E_DEPRECATED);


?>