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

</head>

<body>
    <div class="background bg1">
       <div class="container">
            <img src="logo.png" alt="" class="signin-main-logo">
            <?php  
                if(isset($_SESSION['status']))
                {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }
            ?>
            <div class="form-hei">
                <form id="signup"  action="insert_up.php" method="post" class="signup-form">
                    <div>
                        <div class="input-group fnme-field">
                            <img src="ic_user.png" alt="" class="icn-img">
                            <!--<span class="input-group-addon fname-icn"><i class="fa fa-envelope icon"></i></span>-->
                            <input class="fname-field" type="text" name="fname" id="fname" value=""
                                placeholder="First Name" required>
                        </div>
                        <div class="input-group lnme-field">
                            <img src="ic_user.png" alt="" class="icn-img">
                            <!--<span class="input-group-addon lname-icn"><i class="fa fa-envelope icon"></i></span>-->
                            <input class="lname-field" type="text" name="lname" id="lname" value=""
                                placeholder="Last Name" required>
                        </div>

                        <div class="input-group mail-field">
                            <img src="ic_mail.png" alt="" class="mail-img">
                            <!--<span class="input-group-addon email-icn"><i class="fa fa-envelope icon"></i></span>-->
                            <input class="email-field" type="text" name="email" id="email" value="" placeholder="Email" required>
                        </div>

                        <div class="input-group psw-field">
                            <img src="ic_password.png" alt="" class="psw-img">
                            <!--<span class="input-group-addon pass-icn"><i class="fa fa-key icon"></i></span>-->
                            <input class="pass-field" type="password" name="password" id="psw" value="" placeholder="Password" maxlength="8"
                                required>
                        </div>

                        <div class="input-group cpsw-field">
                            <img src="ic_password.png" alt="" class="cpsw-img">
                            <!--<span class="input-group-addon pass-icn"><i class="fa fa-key icon"></i></span>-->
                            <input class="cpass-field" type="password" name="cpassword" id="cpsw" value=""
                                placeholder=" Confirm Password" maxlength="8" required>
                        </div>
                    </div>

                    <div class="part clearfix">
                        <div class="date">
                            <img src="date_of_birth_577020.png" alt="" class="date-img">
                            <input type="date" id="date" name="date"  value="" placeholder="yyyy-mm-dd" required>
                            <!-- <input type="post-date" id="date" placeholder="yyyy-mm-dd"> -->
                        </div>

                        <div class="gender">
                            <img src="1888_picture.png" alt="" class="gender-img">
                            <select id="gender" name="gender">
                                <option>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="contry-box">

                            <input type="text" id="no" value="" placeholder="91">
                        </div>

                        <div class="contact-no">
                            <img src="phone.png" alt="" class="con-img">
                            <input type="number" id="contact" name="mobile_number"  value="" placeholder="Mobile Number" required>
                        </div>
                    </div>

                    <div class="input-group add-field">
                        <img src="address.png" alt="" class="add-img">
                        <!--<span class="input-group-addon cty-icn"><i class="fas fa-city icon"></i></i></span>-->
                        <input class="add-field" type="address" id="address" name="address" value=""
                            placeholder="Address[optional]" required>
                    </div>

                    <!--<div class="part-field">-->
                    <div class="input-group city-field">
                        <img src="city.png" alt="" class="city-img">
                        <!--<span class="input-group-addon cty-icn"><i class="fas fa-city icon"></i></i></span>-->
                        <input class="cty-field" type="city" id="city" name="city" value="" placeholder="City[optional]"
                        required>
                    </div>


                    <div class="input-group state-field">
                        <img src="state.png" alt="" class="state-img">
                        <!--<span class="input-group-addon ste-icn"><i class=""></i></span>-->
                        <input class="ste-field" type="state" id="state" name="state"  value="" placeholder="State[optional]"
                        required>
                    </div>

                    <div class="input-group country-field">
                        <img src="country.png" alt="" class="cntry-img">
                        <!--<span class="input-group-addon cntry-icn"><i class=""></i></span>-->
                        <input class="cntry-field" type="country" id="country" name="country" value=""
                            placeholder="Country[optional]" required>
                    </div>

            <!-- <div class="footer"> -->
                <button class="btn"  type="submit" onclick="submitForm()" name="submit">SIGNUP</button>
                
                </form>
                    <a href="signin.php"><button class="sign-in-btn" type="submit">SIGNIN</button></a>
            </div>
            <!-- </div> -->
        </div>
    </div>



    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password", "state", "city", "country", "address", "phone") {
                x.type = "text";
            } else {
                x.type = "password", "state", "city", "country", "address", "phone";
            }
        }


    </script>



</body>

</html>