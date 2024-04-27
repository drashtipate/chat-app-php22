<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>learning game</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

</head>

<body>
  <div class="background">
    <div class="container">
      <img src="logo.png" alt="" class="main-logo">
      <?php  
                if(isset($_SESSION['status']))
                {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }
            ?>

      <div class="form-sss">
        <form id="index" action="insert.php" method="POST">
          <div>
            <div class="input-group mail-field">
              <img src="ic_mail.png" alt="" class="mail-img">
              <!--<span class="input-group-addon email-icn"><i class="fa fa-envelope icon"></i></span>-->
              <input class="email-field" type="text" name="email" id="email" value="" placeholder="Email" required>
            </div>


            <div class="input-group psw-field">
              <img src="ic_eye.png" alt="" onclick="myFunction()" class="eye-img">
              <img src="ic_password.png" alt="" class="pswd-img">
              <!--<span class="input-group-addon pass-icn"> <i class="fa fa-key icon"></i></span>-->
              <input type="password"   class="pass-field" name="password" id="psw" value="" placeholder="Password" required>
             
            </div>
          </div>

          <label class="lbl" for="psw">Reset password?</label>
        
       
        
        <button  type="submit" class="btn" onclick="submitForm()" name="submit" >SIGNIN</button>

        
        </form>
        <a href="signup.php"><button class="sign-up-btn" type="submit">SIGNUP</button></a>
      </div>

      <script>
        function submitForm() {
          let form = document.getElementById("index");
          form.submit();
        }
      </script>

    </div>
  </div>


</body>

</html>