<?php

$hName='localhost'; // host name
$uName='root';   // database user name
$password='';   // database password
$dbName = "db_name"; // database name

$Conn = mysqli_connect($hName,$uName,$password,"$dbName");
// $Conn = mysqli_connect('localhost','root','');
  if(!$Conn){
      die("no connection:" .mysql_error());
    }

?>

   
