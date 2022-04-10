<?php
require_once("include/connect.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="look.css">
    <link rel="stylesheet" href="reg.css">
</head>
<body>

<div class="wraper">
        <nav>
            <div class="nav_title">
                <a href="#">Seat Booking</a>
            </div>
            <div class="nav_items">
                <a  aria-current="page" href="#">Login</a>


            </div>
        </nav>
    </div>

<div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div  class="container">
        <div style="margin-top: 40px;"  class="signup-content">
            <form action="registerphp.php"  method="POST" id="signup-form" class="signup-form">
                <h2 class="form-title">Create account</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required/>
                </div>

                <div class="form-group">
                    <input type="number" class="form-input" name="age" id="age" placeholder="Your Age" required/>
                </div>
               
                <div class="form-group">
                    <input  type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                </div>

                <div class="form-group">
                    <input  type="number" class="form-input" name="mob_number" id="email" placeholder="Your Phone Number" required/>
                </div>

                <div class="form-group">
                    <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
              
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                </div>
            </form>
            <p class="loginhere">
                Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
            </p>
        </div>
    </div>
</section>

</div>
</body>
</html>


<?php
require_once "include/footer.php";
?>