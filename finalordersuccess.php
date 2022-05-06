<?php
session_start();
?>


<!DOCTYPE html>
<head>
    <title>Order Successful!</title>
    <meta name="viewport" content="width =device-width, initial-scale =1">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
#banner{
    background: linear-gradient(rgba(0,0,0,0.5),#009688), url(images/modern.jpg);
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    height: 100vh;
    z-index: -1;
}
.logo{
    width: 220px;
    position: absolute;
    top: 2%;
    left: 2%;
}
.banner-text{
    text-align: center;
    color: #fff;
    padding-top: 220px;
}
.banner-text h1{
    font-size: 70px;
    font-family: 'Kaushan Script', cursive;
}
.banner-text h3{
    font-family: 'Kaushan Script', cursive;
}
.banner-text p{
    font-size: 20px;
    font-weight: 300;
    font-style: italic;
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    margin-left: auto;
    margin-right: auto;
}
.banner-btn{
    margin: 70px auto 0;
}
.banner-btn a{
    width: 150px;
    text-decoration: none;
    display: inline-block;
    margin: 0 10px;
    padding: 12px 0;
    font-weight: bold;
    color: #fff;
    border: .5px solid #fff;
    position: relative;
    z-index: 1;
    transition: color 0.5s;
}
.banner-btn a span{
    width: 0%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: #009680;
    z-index: -1;
    transition: 0.4s;
}
.banner-btn a:hover span{
    width: 100%;
}
.banner-btn a:hover{
    color: #000;
}
@media screen and (max-width: 1000px){
    .logo{
        width: 170px;
        position: absolute;
        top: 2%;
    }
    .banner-text h1{
        font-size: 44px;
    }
    .banner-btn a{
        display: block;
        margin: 20px auto;
    }
}
@media screen and (max-width: 580px){
    .banner-text{
        text-align: center;
        color: #fff;
        padding-top: 180px;
    }
    .banner-text h1{
        font-size: 24px;
        font-family: 'Kaushan Script', cursive;
    }
    .banner-text p{
        font-size: 12px;
        font-weight: 300;
        font-style: italic;
    }
    .banner-btn{
        margin: 70px auto 0;
    }
}
    </style>


    <section id="banner">
        <a href="../index.php"><img  src="images/logo2.png" class="logo"></a>
        <div class="banner-text">
            <h1><?php if(isset($_SESSION['passingfirstname'])){
           echo $_SESSION['passingfirstname']; echo ",";
        }
         ?> Your order has been placed successfully!</h1>
            <p>Delivery date, time and amount may be taken into consideration in direct contact with you. You will be called very soon!</p>
            <h3>We build your imagination!</h3>
            <div class="banner-btn">
                <a href="../index.php"><span></span>Home</a>
                <a href="/4%20aboutus.htm"><span></span>Contact Us</a>
            </div>
        </div>
    
    </section>


</body>
</html>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>