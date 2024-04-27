

<?php
$hName='localhost'; // host name
$uName='root';   // database user name
$password='';   // database password
$dbName = "form_db"; // database name
$Conn = mysqli_connect($hName,$uName,$password,"$dbName");
  if(!$Conn){
      die('Could not Connect MySql Server:' .mysql_error());
  }

?>

   
