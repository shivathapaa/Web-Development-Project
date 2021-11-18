
<?php

session_start();

if(!isset($_SESSION['adminpass'])){
    echo '<script> alert( "You are logged out!")</script>';
    ?>

    <script>
        location.replace("1%20homepage.php");
    </script>
    <?php
}
?>



<!DOCTYPE html>
<head>
    <title>Admin SignUp</title>
    <body>




<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
/* Change the white to any color ;) */
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
    transition: background-color 5000s ease-in-out 0s;
    -webkit-text-fill-color: rgb(255, 255, 255) !important;
}
 /* in contact remove increment bar */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
body{
    background-image: linear-gradient(rgba(0,0,0,0.5),#009688),url(images1/third\ \(1\).jpg);
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    z-index: -1;
}
::placeholder {
    color: rgb(175, 172, 172); /* Firefox  chrome and other*/
    opacity: 0.7;  
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: rgb(187, 179, 179);
    opacity: 0.7;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: rgb(187, 179, 179);
    opacity: 0.7;
}
.logo{
    max-width: 220px;
    margin-left: 18px;
    margin-top: 8px;
}
.signupbox{
    width: 377px;
    height: 756px;
    background-image: url(images1/edit1.jpg);
    background-size: 100%;
    color: #ffffff;
    position: absolute;
    transform: translate(130%, 5%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 1%;
}
.signup-img{
    width:100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.signupbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.signupbox input{
    width: 100%;
    margin-bottom: 20px;
}
.signupbox input[type="text"], .signupbox input[type="password"], .signupbox input[type="email"], .signupbox input[type="number"]{
    border: none;
    border-bottom: 1px solid #ffffff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    font-size: 16px;
}
.signupbox input[type="submit"]{
    border: none; 
    outline: none;
    height: 40px;
    background: #009680;
    font-size: 18px;
    border-radius: 20px;
    color: #ffffff;
    transition: 0.6s;
}
.signupbox input[type="submit"]:hover{
    cursor: pointer;
    background: #e7e1e1;
    color: #009680;
}
.signupbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: rgb(187, 186, 186);
}
.signupbox a:hover{
    color: #009680;
}
@media (max-width: 1000px){
    .signupbox{
        width: 630px;
        height: 1360px;
        padding: 150px 30px;
        transform: translate(30%, 15%);
    }
    .logo{
        max-width: 320px;
    }
    .signup-img{
        width:150px;
        height: 150px;
        top: -65px;
        left: calc(45% - 50px);
    }
    h1{
        font-size: 34px;
    }
    .signupbox p{
        font-size: 28px;
    }
    .signupbox input[type="text"], .signupbox input[type="password"], .signupbox input[type="email"]{
        font-size: 24px;
    }
    .signupbox input{
        margin-top: 20px;
        margin-bottom: 50px;
    }
    .signupbox input[type="submit"]{
        height: 60px;
        font-size: 26px;
    }
    .signupbox a{
        font-size: 24px;
        display: flex;
        position: relative;
        bottom: 25px;
    }
}
@media (max-width: 770px){
    .signupbox{
        width: 420px;
        height: 720px;
        padding: 70px 30px;
    }
    .logo{
        max-width: 220px;
    }
    .signup-img{
        width:110px;
        height: 110px;
        top: -55px;
        left: calc(50% - 50px);
    }
    h1{
        font-size: 22px;
    }
    .signupbox p{
        font-size: 16px;
    }
    .signupbox input[type="text"], .signupbox input[type="password"], .signupbox input[type="email"]{
        font-size: 16px;
    }
    .signupbox input{
        margin-top: 5px;
        margin-bottom: 10px;
    }
    .signupbox input[type="submit"]{
        height: 40px;
        font-size: 18px;
    }
    .signupbox a{
        font-size: 14px;
        display: flex;
        position: relative;
        bottom: 7px;
    }
}
</style>










        <div class="logo">
            <a href="http://localhost/AutomobileWebProject/adminconn.php"><img src="images/logo2.png" class="logo"></a>
        </div>
        <div class="signupbox">
            <img src="images1/user2.png" class="signup-img">
            <h1>Admin Sign Up</h1>
            <form action="adminsignupdb.php" method="POST">
                <p>First Name</p>
                <input type="text" name="adminfirstname" placeholder="Enter First Name" required>
                <p>Last Name</p>
                <input type="text" name="adminlastname" placeholder="Enter Last Name" required>
                <p>Contact</p>
                <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;"  name="contact" placeholder="code(2-3) number(10)" autocomplete="off" required>
                <p>Full Address</p>
                <input type="text" name="fulladdress" placeholder="Address" required>
                <p>Email ID</p>
                <input type="email" name="adminid" placeholder="example@gmail.com" autocomplete="off" minlength="14" required>
                <p>Password</p>
                <input type="password" minlength="8" name="adminpassword" placeholder="Enter Password" autocomplete="off" required>
                <p>Confirm Password</p>
                <input type="password" minlength="8" name="password2" placeholder="Confirm Password" autocomplete="off" required>
                <input type="submit" name="submit" value="Sign Up">
                <br>
                <a href="http://localhost/AutomobileWebProject/5%20loginpage.htm">Login</a>
            </form>
        </div>
    </body>
</head>
</html>
