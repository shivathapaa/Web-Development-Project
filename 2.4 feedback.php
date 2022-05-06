<?php
session_start();
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    function preventBack() {
        window.history.forward();
    }

    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null
    };
    </script>
</head>
<body>


<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html{
    scroll-behavior: smooth;
}
/* Change the white to any color ;) */
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
    transition: background-color 5000s ease-in-out 0s;
    -webkit-text-fill-color: rgb(255, 255, 255) !important;
}
body{
    font-family: 'Poppins', sans-serif;
}
::placeholder {
    color: rgb(175, 172, 172); /* Firefox  chrome and other*/
    opacity: 0.8;  
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: rgb(187, 179, 179);
    opacity: 0.8;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: rgb(187, 179, 179);
    opacity: 0.8;
}
ul{
    list-style-type: none;
}
a{
    color: inherit;
    cursor: pointer;
    text-decoration: none;
}
header{
    position: absolute;
    top: 0;
    left: 0;
    z-index: 10;
    width: 100%;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #ffffff;
    padding: 35px 100px 0;
}
.logo{
    max-width: 210px;
    position: relative;
    left: -65px;
}
@media (max-width: 1000px){
    header{
        padding: 20px 50px;
    }
    .logo{
        max-width: 255px;
        left: -25px;
    }
}
@media (max-width: 770px){
    .logo{
        max-width: 150px;
        position: relative;
        left: -10px;
    }
}
section{
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 110px 100px;
    color: #ffffff;
}
@media (max-width: 1000px){
    section{
        padding: 100px 50px;
    }
}
@media (max-width: 600px){
    section{
        padding: 125px 30px;
    }
}
.banner-area{
    position: relative;
    justify-content: center;
    min-height: 100vh;
    color: #ffffff;
    text-align: center;
}
.banner-area .banner-img{
    background: linear-gradient(rgba(0,0,0,0.5),#009688), url(images1/secondcar\ \(3\).jpg);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    z-index: -1;
}
.banner-area h1{
    margin-bottom: 15px;
    font-size: 20px;
    font-style: italic;
    font-weight: 100;
}
.banner-area h3{
    font-size: 70px;
    font-weight: 300;
    text-transform: uppercase;
    font-family: 'Kaushan Script', cursive;
}
@media (max-width: 800px){
    .banner-area{
        min-height: 600px;
    }
    .banner-area h1{
        font-size: 27px;
    }
    .banner-area h3{
        font-size: 20px;
    }
}




#feedback{
    padding: 40px 0 90px 0;
    background: #e2ebeb;
    position: relative;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/secondcar\ \(8\).jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}
.table{
    color: #000000;
    width: 60%;
    height: 405px;
    background-size: 100%;
    color: #ffffff;
    position: relative;
    top: 50%;
    left: 0%;
    box-sizing: border-box;
    padding: 105px 30px;
    border-radius: 1%;
    transition: 0.5s;
}
.table h1{
    margin: 0;
    padding: 0 0 20px;
    color: #009680;
    text-align: center;
    font-size: 32px;
    margin-top: -55px;
    margin-bottom: 30px;
}
.table p{
    margin: 0;
    padding: 0px;
    font-weight: bold;
    font-size: large;
    text-align: center;
    margin-bottom: 15px;
}
.table input{
    width: 100%;
    margin-bottom: 20px;
    text-align: center;
}
.table input[type="text"], .table input[type="email"]{
    border: none;
    border-bottom: 1px solid #ffffff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    font-size: 16px;
}
.mod-img{
    margin-top: 10%;
}
.service-desc{
    width: 80%;
    position: absolute;
    bottom: 0;
    left: 50%;
    opacity: 0;
    transform: translateX(-50%);
    transition: 1s;
}
.service-desc h3{
    font-weight: 400;
}
.table2{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}
.mod-img{
    margin-top: 40%;
}
.table2-img{
    flex-basis: 25%;
    text-align: center;
    border-radius: 7px;
    color: #fff;
    position: absolute;;
    padding-right: 10px;
    margin-right: auto;
    margin-left: auto;
    margin-top: -305px;
}
.table2-img img{
    max-width: 75%;
    border-radius: 7px;
}
.overlay1{
    width: 74.3%;
    height: 99%;
    position: absolute;
    margin-left: 12.3%;
    top: 0px;
    border-radius: 7px;
    cursor: pointer;
    background: linear-gradient(rgba(0,0,0,0.5), #009688);
    opacity: 0;
    transition: 1s;
}
.table2-img:hover .overlay1{
    opacity: 1;
}
.service-desc{
    width: 80%;
    position: absolute;
    bottom: 0;
    left: 50%;
    opacity: 0;
    transform: translateX(-50%);
    transition: 1s;
}
.service-desc h3{
    font-weight: 400;
}
.table2-img:hover .service-desc{
    bottom: 50%;
    opacity: 1;
}
@media (max-width: 1000px){
    .table{
        left: 0%;
    }
    .table h1{
        font-size: 44px;
    }
    .table p{
        font-size: 28px;
    }
    .table input[type="text"], .table input[type="email"]{
        font-size: 26px;
    }
    .mod-img{
        margin-top: 62%;
    }
    .table2-img img{
        max-width: 65%;
    }
}
@media (max-width: 770px){
    .mod-img{
        margin-top: 95%;
    }
}
.table input[type="submit"]{
    border: none; 
    outline: none;
    height: 40px;
    background: #009680;
    font-size: 18px;
    border-radius: 20px;
    color: #ffffff;
    transition: 0.6s;
    position: relative;
}
.table input[type="submit"]:hover{
    cursor: pointer;
    background: #e7e1e1;
    color: #009680;
}
.footer{
    margin-bottom: -55px;
}
.logo2-png{
    max-width: 20%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
figcaption{
    text-align: center;
    font-size: 85%;
    font-weight: 600;
    color: #818d8b;
    font-style: italic;
}
@media (max-width: 1000px){
    .logo2-png{
        max-width: 30%;
    }
    figcaption{
        font-size: 100%;
    }
    .table input[type="submit"]{
        height: 50px;
        font-size: 24px;
    }
}
</style>

    
    <header><a href="../index.php"><img src="images/logo2.png" class="logo"></a>
    </header>
    <section class="banner-area">
        <div class="banner-img"></div>
        <h3><?php if(isset($_SESSION['passingfirstname'])){
           echo $_SESSION['passingfirstname']; echo ",";
        }
         ?> Your Feedback</h3>
        <h1>Your feedback, our improvement for you.</h1>
    </section>



    <section id="feedback">
        <div class="table">
            <h1>Feedback</h1>
            <form action="24feedback.php/" method="POST" id="form4">
                <p>Name</p>
                <input type="text" name="fullname" placeholder="Full Name" minlength="5" required>

                <p>Message</p>
                <input type="text" name="message" placeholder="Your feedback" autocomplete="off" minlength="20" required>
                <br><br><br>

                <!-- emailid -->
                <input type="hidden" name="emailid" form="form4">
                
                <input type="submit" name="submit" value="Submit" form="form4">
            </form>
        </div>
        <div class="mod-img"><div class="table2">
            <div class="table2-img">
                <img src="images/thankyou 1.png" style="color:blue" alt="Front-face Car Image">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Thank You!😊</h3>
                </div>
            </div>
        </div></div>
        <div class="footer">
            <a style="text-decoration:none" href="../index.php">
                <img src="images/logo2.png" style="color:blue"  alt="Company Logo" class="logo2-png"></a>
                <figcaption>We build your imagination!</figcaption>
        </div>
    </section>
</body>
</html>