<?php
include 'mydb.php';
session_start();

if(isset($_POST['submit']))
{    
   $fname = mysqli_real_escape_string($Conn, $_POST['fname']);
   $lname = mysqli_real_escape_string($Conn, $_POST['lname']);
   $email = mysqli_real_escape_string($Conn, $_POST['email']);
   // $password = md5($_POST['password']);
   // $cpassword = md5($_POST['cpassword']);
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $date = $_POST['date'];
   $gender = $_POST['gender'];
   $mobile_number = $_POST['mobile_number'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];

   // $select = " SELECT * FROM  db_table WHERE email = '$email' && password = '$password'";

   // $result = mysqli_query($Conn, $select);

   
  
  $result = mysqli_query($Conn, "SELECT * FROM  db_table WHERE email = '$email'");

    if(mysqli_num_rows($result) > 0) {
      $_SESSION['status'] = '<script>alert("email already taken..")</script>';
       header('location:signup.php');
      } 
   else {
      
     if($password===$cpassword)
      {
         // echo "password matched";
         $insert = "INSERT INTO  db_table (fname,lname,email,password,cpassword,date,gender,mobile_number,address,city,state,country)
         VALUES ('$fname', '$lname','$email','$password','$cpassword','$date','$gender','$mobile_number','$address','$city','$state','$country')";
         
          mysqli_query($Conn, $insert);

           //alert function...
          $_SESSION['status'] = '<script>alert("form data inserted successfully")</script>';
           header('location:signin.php');

      }else{

         $_SESSION['status'] = '<script>alert("password not matched")</script>';
         header('location:signup.php');

         
         
      }
  }   
};

?>





































