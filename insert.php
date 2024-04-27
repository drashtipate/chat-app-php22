<?php

include 'mydb.php';

session_start();

if(isset($_POST['submit']))
{

   $email = mysqli_real_escape_string($Conn, $_POST['email']);
   $password = $_POST['password'];
   // $cpassword = $_POST['cpassword'];
   

$result = mysqli_query($Conn, "SELECT * FROM  db_table WHERE email = '$email'");

$row= mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0) {
   $_SESSION['status'] = '<script>alert(" success logged in..")</script>';
   header('location:signin.php');

   if($password == $row['password']) {
   // if($email == $row["email"]){
      $_SESSION['id'] = $row['id'];
     
   }
   else {
   $_SESSION['status'] = '<script>alert("wrong  email password!!")</script>';
   header('location:signin.php');
   }
}
else
{
   $_SESSION['status'] = '<script>alert("username or email not found!!")</script>';
   header('location:signin.php');
}

};

?>



























     





