<?php

session_start();

if(!isset($_SESSION['adminpass'])){
    echo '<script> alert( "You are logged out!")</script>';
    ?>

    <script>
        location.replace("../index.php");
    </script>
    <?php
}
?>



<!DOCTYPE html>
<head>
    <title>Two Flames Automobile Services</title>
    <meta name="viewport" content="width =device-width, initial-scale =1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width =device-width, initial-scale =1">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
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
        background: linear-gradient(rgba(0,0,0,0.5),#009688), url(images/car1.jpg);
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        height: 100vh;
        z-index: -1;
    }
    .logo{
        width: 250px;
        position: absolute;
        top: -4%;
        left: 0%;
    }
    .banner-text{
        text-align: center;
        color: #fff;
        padding-top: 180px;
    }
    .banner-text h1{
        font-size: 100px;
        font-family: 'Kaushan Script', cursive;
    }
    .banner-text p{
        font-size: 20px;
        font-weight: 300;
        font-style: italic;
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
        background: #fff;
        z-index: -1;
        transition: 0.4s;
    }
    .banner-btn a:hover span{
        width: 100%;
    }
    .banner-btn a:hover{
        color: #000;
    }
    #sideNav{
        width: 230px;
        height: 100vh;
        position: fixed;
        font-weight: bold;
        right: -250px;
        top: 0;
        background: #009688;
        z-index: 2;
        transition: 0.5s;
    }
    nav ul li{
        list-style: none;
        margin: 50px 20px;
    }
    nav ul li a{
        text-decoration: none;
        color: #fff;
    }
    #menuBtn{
        width: 50px;
        height: 50px;
        background: #009688;
        text-align: center;
        position: fixed;
        right: 30px;
        top: 20px;
        border-radius: 3px;
        z-index: 3;
        cursor: pointer;
    }
    #menuBtn img{
        width: 20px;
        margin-top: 15px;
    }
    @media screen and (max-width: 1000px){
        .logo{
            width: 150px;
            position: absolute;
            top: -3%;
        }
        #menuBtn{
            width: 30px;
            height: 30px;
            background: #009688;
            text-align: center;
            position: fixed;
            right: 3%;
            top: 4%;
            border-radius: 3px;
            z-index: 3;
            cursor: pointer;
        }
        #menuBtn img{
            width: 15px;
            margin-top: 8px;
        }
            #sideNav{
            width: 170px;
            height: 100vh;
            position: fixed;
            font-weight: bold;
            right: -250px;
            top: 0;
            background: #009688;
            z-index: 2;
            transition: 0.5s;
        }
        nav ul li{
            list-style: none;
            margin: 40px 20px;
        }
        nav ul li a{
            text-decoration: none;
            text-transform: uppercase;
            font-size: 13px;
            color: #fff;
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
            padding-top: 90px;
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
    
    /* feature */
    
    #feature{
        background: #dae0df;
        width: 100%;
        padding: 70px 0;
    }
    .title-text{
        text-align: center;
        padding-bottom: 70px;
    }
    .title-text p{
        margin: auto;
        font-size: 20px;
        color: #009688;
        font-weight: bold;
        position: relative;
        z-index: 1;
        display: inline-block;
    }
    .title-text p::after{
        content: '';
        width: 50px;
        height: 35px;
        background: linear-gradient(#019587,#fff);
        position: absolute;
        top: -20px;
        left: 0;
        z-index: -1;
        transform: rotate(10deg);
        border-top-left-radius: 35px;
        border-bottom-right-radius: 35px;
    }
    .title-text h1{
        font-size: 50px;
        font-weight: 900;
    }
    .feature-box{
        width: 80%;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        text-align: center;
    }
    .features{
        flex-basis: 50%;
    }
    .features-img{
        flex-basis:50%;
        margin: auto;
    }
    .features-img img{
        width:70%;
        border-radius: 10px;
    }
    .features h1{
        text-align: left;
        margin-bottom: 10px;
        font-weight: bold;
        color: #009688;
    }
    .features-desc{
        display: flex;
        align-items: center;
        font-weight: bold;
        margin-bottom: 40px;
    }
    .feature-icon .fa{
        width: 50px;
        height: 50px;
        font-size: 30px;
        line-height: 50px;
        border-radius: 8px;
        color: #009688;
        border: 1px solid #009688;
    }
    .feature-text p{
        padding: 0 20px;
        text-align: initial;
        text-align: justify;
        text-justify: inter-word;
    }
    @media screen and (max-width: 770px){
        .title-text h1{
            font-size: 35px;
        }
        .features{
            flex-basis: 100%;
        }
        .features-img{
            flex-basis: 100%;
        }
        .features-img img{
            width: 100%;
        }
    }
    
    /* Service */
    
    #service{
        width: 100%;
        background: #e2ebeb;
        padding: 70px 0;
    }
    .service-box{
        width: 80%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: auto;
    }
    .single-service{
        flex-basis: 48%;
        text-align: center;
        border-radius: 7px;
        margin-bottom: 20px;
        color: #fff;
        position: relative;
    }
    .single-service img{
        width: 100%;
        height: 100%;
        border-radius: 7px;
    }
    .overlay{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        border-radius: 7px;
        cursor: pointer;
        background: linear-gradient(rgba(0,0,0,0.5), #009688);
        opacity: 0;
        transition: 1s;
    }
    .single-service:hover .overlay{
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
    hr{
        background: #fff;
        height: 2px;
        border: 0;
        margin: 15px auto;
        width: 60%;
    }
    .service-desc h3{
        font-weight: 800;
    }
    .service-desc p{
        font-size: 14px;
        font-weight: bold;
    }
    .single-service:hover .service-desc{
        bottom: 40%;
        opacity: 1;
    }
    @media screen and (max-width: 770px){
        .single-service{
            flex-basis: 100%;
            margin-bottom: 30px;
        }
        .service-desc p{
            font-size: 12px;
        }
        hr{
            margin: 5px auto;
        }
    }
    
    /* Testimonial */
    
    #testimonial{
        background: #dae0df;
        width: 100%;
        padding: 70px 0;
    }
    .testimonial-row{
        width: 80%;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
    }
    .testimonial-col{
        flex-basis: 28%;
        padding: 10px;
        margin-bottom: 30px;
        border-radius: 5px;
        box-shadow: 0 10px 20px 3px #00968814;
        cursor: pointer;
        transition: transform .5s;
    }
    .testimonial-col p{
        font-size: 14px;
        font-weight: bolder;
        text-align: justify;
        text-justify: inter-word;
    }
    .user{
        display: flex;
        align-items: center;
        font-weight: bold;
        margin: 20px 0;
    }
    .user img{
        width: 40px;
        margin-right: 20px;
        border-radius: 3px;
    }
    .user-info .fa{
        margin-left: 10px;
        color: #E1306C;
        font-size: 20px;
    }
    .user-info a{
        color: #009688;
        font-size: 16px;
    }
    .testimonial-col:hover{
        transform: translateY(-7px);
    }
    @media screen and (max-width: 770px){
        .testimonial-col{
            flex-basis: 100%;
        }
    }
    
    
    /* Meetus*/
    
    #meetus{
        padding: 100px 0 20px;
        background: #e2ebeb;
        position: relative;
    }
    .meetus-row{
        width: 80%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .meetus-left,.meetus-right{
        flex-basis: 45%;
        padding: 10px;
        margin-bottom: 20px;
        font-weight: bold;
    }
    .meetus-right{
        text-align: right;
    }
    .meetus-row h1{
        margin: 10px 0;
    }
    .meetus-row p{
        line-height: 35px;
    }
    .meetus-left .fa, .footer-right .fa{
        font-size: 20px;
        color: #009688;
        margin: 10px;
    }
    .meetus-img{
        max-width: 370px;
        opacity: 0.15;
        position: absolute;
        left: 50%;
        top: 34%;
        transform: translate(-50%,-50%);
    }
    
    @media screen and (max-width: 1000px){
        .meetus-left, .meetus-right{
            flex-basis: 100%;
            font-size: 14px;
        }
        .meetus-img{
            max-width: 270px;
            top: 21%;
        }
    }
    
    /* Contact */
    
    #contact{
        width: 100%;
        background: #dae0df;
        padding: 100px 0 20px;
        position: relative;
    }
    .followus{
        width: 80%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        position: absolute;
        margin-left: 10%;
    }
    .followus1{
        width: 80%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        opacity: 0.95;
    }
    .pro1-img, .pro2-img{
        max-width: 16%;
        border-radius: 5%;
        z-index: 5;
        position: absolute;
    }
    .pro1-img{
        position: relative;
        left: 8%;
    }
    .pro2-img{
        position: relative;
        right: 8%;
    }
    .footer-left,.footer-right{
        padding: 10px;
        margin-bottom: 20px;
    }
    .footer-left{
        position: relative;
        left: 8%;
    }
    .footer-right{
        position: relative;
        right: 8%;
    }
    .footer-left .fa,.footer-right .fa{
        font-size: 20px;
        color: #009688;
        margin: 10px;
    }
    .footer-left .button{
        display: inline-block;
        height: 35px;
        width: 35px;
        margin: 0 5px;
        overflow: hidden;
        background: rgb(235, 232, 232);
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease-out;
    }
    .footer-right .button{
        display: inline-block;
        height: 35px;
        width: 35px;
        margin: 0 5px;
        overflow: hidden;
        background: rgb(235, 232, 232);
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease-out;
    }
    .footer-left .button:hover{
        width: 150px;
    }
    .footer-right .button:hover{
        width: 150px;
    }
    .footer-left .button .icon{
        display: inline-block;
        height: 35px;
        width: 35px;
        color: #009688;
        text-align: center;
        border-radius: 50px;
        box-sizing: border-box;
        line-height: 10px;
        transition: all 0.3s ease-out;
    }
    .footer-right .button .icon{
        display: inline-block;
        height: 35px;
        width: 35px;
        color: #009688;
        text-align: center;
        border-radius: 50px;
        box-sizing: border-box;
        line-height: 10px;
        transition: all 0.3s ease-out;
    }
    .footer-left .button:nth-child(1):hover .icon, .footer-right .button:nth-child(1):hover .icon{
        background: #4267B2;
    }
    .footer-left .button:nth-child(2):hover .icon, .footer-right .button:nth-child(2):hover .icon{
        background: #1DA1F2;
    }
    .footer-left .button:nth-child(3):hover .icon, .footer-right .button:nth-child(3):hover .icon{
        background: #E1306C;
    }
    .footer-left .button .icon i, .footer-right .button .icon i{
        font-size: 25px;
        line-height: 15px;
        position: relative;
        left: -4px;
        transition: all 0.3s ease-out;
    }
    .footer-left .button:hover .icon i, .footer-right .button:hover .icon i{
        color: #fff;
    }
    .footer-left .button span{
        font-size: 14px;
        
        line-height: 12px;
        margin-left: 12px;
        position: relative;
        top: -3px;
        transition: all 0.3s ease-out;
    }
    .footer-right .button span{
        font-size: 14px;
        
        line-height: 12px;
        margin-left: 12px;
        position: relative;
        top: -3px;
        transition: all 0.3s ease-out;
    }
    .footer-left .button:nth-child(1) span, .footer-right .button:nth-child(1) span{
        color: #4267B2;
    }
    .footer-left .button:nth-child(2) span, .footer-right .button:nth-child(2) span{
        color: #1DA1F2;
    }
    .footer-left .button:nth-child(3) span, .footer-right .button:nth-child(3) span{
        color: #E1306C;
    }
    .piccon{
        width: 100%;
        margin: 0 auto;
        margin-top: -38px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .contact1, .contact2{
        padding: 5px;
        margin-bottom: 20px;
        font-weight: bold;;
        text-align: center;
        color: #009860;
        font-size: 75%;
    }
    .contact1{
        position: relative;
        left: 10%;
    }
    .contact2 {
        position: relative;
        right: 10%;
    }
    .concar{
        max-width: 35%;
        opacity: 0.8;
        z-index: -1;
        position: absolute;
        left: 49%;
        top: 65%;
        transform: translate(-50%,-50%);
    }
    .logo2-png{
        max-width: 12%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    .copyright{
        float: right;
        color: #009688;
        font-size: 70%;
    }
    figcaption{
        text-align: center;
        font-size: 75%;
        font-weight: bold;
        color: #009680;
        font-style: italic;
    }
    @media screen and (max-width: 770px){
        .followus{
            width: 90%;
            margin-top: 2%;
            margin-left: 4%;
        }
    
        .followus1{
            width: 100%;
            margin-bottom: -10px;
        }
        .pro1-img, .pro2-img{
            max-width: 35%;
        }
    
        .footer-left .button, .footer-right .button{
            display: inline-block;
            height: 26px;
            width: 26px;
            margin: 0 2px;
        }
        .footer-left .button:hover, .footer-right .button:hover{
            width: 26px;
        }
        .footer-left .button .icon, .footer-right .button .icon{
            display: inline-block;
            height: 26px;
            width: 26px;
            line-height: 10px;
        }
        .footer-left .button .icon i, .footer-right .button .icon i{
            font-size: 17px;
            line-height: 4px;
            position: relative;
            left: -5px;
            top: 1px;
        }
        .footer-left .button span, .footer-right .button span{
            display: none;
        }
        .contact1, .contact2{
            font-size: 10px;
        }
        .logo2-png{
            max-width: 32%;
            margin-top: 20px;
        }
        figcaption{
            font-size: 65%;
        }
    }
    @media only screen and (max-width: 450px){
        .followus{
            width: 90%;
            margin-top: 2%;
            margin-left: 4%;
        }
    }
    </style>
    
    
    
    
    














<section id="banner">
    <a href="#banner"><img  src="images/logo2.1.png" class="logo"></a>
    <div class="banner-text">
        <h1>Automobile Manufacturer</h1>
        <p>Make Your Customized Car</p>
        <div class="banner-btn">
            <a href="5%20loginpage.htm"><span></span>Login</a>
            <a href="3%20project.htm"><span></span>Find More</a>
        </div>
    </div>

</section>

<div id="sideNav">
    <nav>
    <ul>
        <li><a href="#banner">HOME</a></li>
        <li><a href="#feature">FEATURES</a></li>
        <li><a href="#service">SERVICES</a></li>
        <li><a href="#testimonial">EXPERTS VIEW</a></li>
        <li><a href="#meetus">MEET US</a></li>
        <li><a href="#contact">FOLLOW US</a></li>
    </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="images/menu.png" alt="Menu Botton" id="menu">
</div>

<!-- Features -->

<section id="feature">
<div class="title-text">
<p>FEATURES</p>
<h1>Why Choose Us</h1>
</div>
<div class="feature-box">
    <div class="features">
        <h1>Experienced Staff</h1>
        <div class="features-desc">
            <div class="feature-icon">
                <i class="fa fa-shield"></i>
            </div>
            <div class="feature-text">
                <p>We have experienced staff who are qualified for designing and assembling the automobile that you want. Our experienced staff also with new recruiters technique allows us to provide latest service to you.</p>
            </div>
        </div>
        <h1>Top Level Engineering</h1>
        <div class="features-desc">
            <div class="feature-icon">
                <i class="fa fa-check-square-o"></i>
            </div>
            <div class="feature-text">
                <p>We have top engineers at your service. Latest technology are used for the product analysis and manufacturing process.</p>
            </div>
        </div>
        <h1>Your Choice Your Ride</h1>
        <div class="features-desc">
            <div class="feature-icon">
                <i class="fa fa-car"></i>
            </div>
            <div class="feature-text">
                <p>Key is in your hand. You choose your automobile and give us outline, and we make it possible for you. Your outline and our engineering combined gives you your custom automobile.</p>
            </div>
        </div>
    </div>
    <div class="features-img">
        <img src="images/car4.jpg" style="color:blue" alt="Car Image">
    </div>

</div>


</section>

<!-- Service -->

<section id="service">
    <div class="title-text">
        <p>SERVICES</p>
        <h1>We Go For Greatest</h1>
    </div>
    <div class="service-box">
        <div class="single-service">
            <img src="images1/newcar3.jpg" style="color:blue" alt="Front-face Car Image">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Automobile Manufacturer</h3>
                <hr>
                <p>We have concordance with top automobile companies for engineering and manufacturing.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/int1.jpg" style="color:blue" alt="Car Interior">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Automobile Design</h3>
                <hr>
                <p>Design outline provided by customer is kept at high priority for their own custom automobile.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images1/newcar1.jpg" style="color:blue" alt="Car Image">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Automobile Brand</h3>
                <hr>
                <p>Customer gets to choose their favourite brand to manufacture their automobile.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images1/newcar6.jpg" style="color:blue" alt="Back-face Car">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Automobile Parts</h3>
                <hr>
                <p>We use best automobile parts which are convienent with the customers outline designe.</p>
            </div>
        </div>
    </div>



</section>

<!-- Testimonial -->

<section id="testimonial">
    <div class="title-text">
        <p>Experts View</p>
        <h1>What Engineer Says</h1>
    </div>
    <div class="testimonial-row">
        <div class="testimonial-col">
            <div class="user">
                <b><img src="images/user1.jpg" style="color:blue" alt="Commenter Image"></b>
                <div class="user-info">
                    <h4>Dr. Mihiar Ayoubi<a  href="https://www.instagram.com/rollsroycecars/?hl=en"><i class="fa fa-instagram"></i></a></h4>
                    <p><a style="text-decoration:none" href="https://www.instagram.com/rollsroycecars/?hl=en"><small>@rollsroycecars</small></a></p>
                </div>
            </div>
            <p>Automobile industry has always been very efficient for bringing luxury and ease in one's life. Taking automobile industry in next step <a href="#banner" style="text-decoration:none; color:MediumSeaGreen;" ><i>Two Flames</i></a>  is providing services to customer where customer designe outline and company engineers a custom automobile in concordance with top automobile companies.</p>
        </div>
        <div class="testimonial-col">
            <div class="user">
                <b><img src="images/pro1.jpg" style="color:blue" alt="Commenter Image"></b>
                <div class="user-info">
                    <h4>Shiva Thapa<a  href="https://www.instagram.com/shiva_thapaa/"><i class="fa fa-instagram"></i></a></h4>
                    <p><a style="text-decoration:none" href="https://www.instagram.com/shiva_thapaa/"><small>@shivathapa</small></a></p>
                </div>
            </div>
            <p><a href="#banner" style="text-decoration:none; color:MediumSeaGreen;" ><i>Two Flames</i></a> is only company who provides the custom automobile direct from the manufacturer. Customers who always wanted the custom automobile will be most benifitted by the company. This service is going to make a great fame in automobile industry.</p>
        </div>
        <div class="testimonial-col">
            <div class="user">
                <b><img src="images/pro2.jpg" style="color:blue" alt="Commenter Image"></b>
                <div class="user-info">
                    <h4>Suraj Kc<a  href="https://www.instagram.com/s_u_r_a_z/"><i class="fa fa-instagram"></i></a></h4>
                    <p><a style="text-decoration:none" href="https://www.instagram.com/s_u_r_a_z/"><small>@surajkc</small></a></p>
                </div>
            </div>
            <p>The services proposed by the company <a href="#banner" style="text-decoration:none; color:MediumSeaGreen;" ><i>Two Flames</i></a>  is one of the unique and very demanded service in today's automobile market. It is going to be one of the best service in automobile field. Anyone can have their own custom car direct from the manufacturer which is obviously a great leap in automobile sector.</p>
        </div>
    </div>

</section>

<!-- Meetus -->

<section id="meetus">
    <div class="title-text">
        <p>MEET US</p>
        <h1>Make Order</h1>
    </div>
    <img src="images1/pngcar (3).png" style="color:blue" class="meetus-img">
    <div class="meetus-row">
    <div class="meetus-left">
        <h1>Service Hour</h1>
        <p><i class="fa fa-question-circle-o"></i>For chat and call support only :</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i>Monday to Friday - 7am to 9pm</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i>Saturday to Sunday - 10am to 3pm</p>
        <p><i class="fa fa-bell"></i>Online ordering service is open for 24/7</p>
    </div>
    <div class="meetus-right">
        <h1>Get In Touch</h1>
        <p>Kathmandu, Nepal <i class="fa fa-map-marker"></i></p>
        <p>two2flames@gmail.com <i class="fa fa-paper-plane"></i></p>
        <p>+91 9986403657, +91 8095708771 <i class="fa fa-phone"></i>
            <br>+977 9843805352, +977 9840279386 <i class="fa fa-phone"></i></p>
    </div>
    </div>
   
</section>

<!-- Contact -->

<section id="contact">
    <div class="title-text">
        <p>FOLLOW US ON</p>
    </div>
    <div class="followus1">
        <img src="images1/realcar.png" class="concar">
        <img src="images/pro1.jpg" style="color:blue" alt="Admin Shiva Thapa" class="pro1-img">
        <img src="images/pro2.jpg" style="color:blue" alt="Admin Suraj Kc" class="pro2-img">
    </div>
    <div class="followus">
        <div class="footer-left">
            <div class="button">
                <div class="icon">
                    <a href="https://m.facebook.com/profile.php?id=100011981942027" style="color: #4267B2"><i class="fa fa-facebook"></i></a>
                </div>
                <a  href="https://m.facebook.com/profile.php?id=100011981942027" style="text-decoration: none;"><span>Facebook</span></a>
            </div>
            <div class="button">
                <div class="icon">
                    <a  href="https://twitter.com/ShivaTh87362106" style="color: #1DA1F2"><i class="fa fa-twitter"></i></a>
                </div>
                <a  href="https://twitter.com/ShivaTh87362106" style="text-decoration: none;"><span>Twitter</span></a>
            </div>
            <div class="button">
                <div class="icon">
                    <a  href="https://www.instagram.com/shiva_thapaa/"  style="color: #E1306C"><i class="fa fa-instagram"></i></a>
                </div>
                <a  href="https://www.instagram.com/shiva_thapaa/" style="text-decoration: none;"><span>Instagram</span></a>
            </div>
        </div>
        <div class="footer-right">
            <div class="button">
                <div class="icon">
                    <a href="https://m.facebook.com/profile.php?id=100003905778059" style="color: #4267B2"><i class="fa fa-facebook"></i></a>
                </div>
                <a  href="https://m.facebook.com/profile.php?id=100003905778059" style="text-decoration: none;"><span>Facebook</span></a>
            </div>
            <div class="button">
                <div class="icon">
                    <a  href="https://twitter.com/suraj01608571" style="color: #1DA1F2"><i class="fa fa-twitter"></i></a>
                </div>
                <a  href="https://twitter.com/suraj01608571" style="text-decoration: none;"><span>Twitter</span></a>
            </div>
            <div class="button">
                <div class="icon">
                    <a  href="https://www.instagram.com/s_u_r_a_z/" style="color: #E1306C"><i class="fa fa-instagram"></i></a>
                </div>
                <a  href="https://www.instagram.com/s_u_r_a_z/" style="text-decoration: none;"><span>Instagram</span></a>
            </div>
        </div>
        <div class="piccon"><div class="contact1"><p>@Shiva_Thapa<br>+977 9843805352, <br> +91 9986403657</p></div>
        <div class="contact2"><p>@Suraj_Kc<br>+977 9840279386, <br>+91 8095708771</p></div></div>
    </div>
    <br><br><br>
    <a href="#banner">
    <img src="images/logo2.png"  style="color:blue"  alt="Company Logo" class="logo2-png"></a>
    <figcaption>We build your imagination!</figcaption>
    <div class="copyright">
        <p>©ThapaKaji & Suraj</p>
    </div>
</section>


<script>
var menuBtn = document.getElementById("menuBtn")
var sideNav = document.getElementById("sideNav")
var menu = document.getElementById("menu")

sideNav.style.right = "-250px";

menuBtn.onclick = function(){
    if(sideNav.style.right == "-250px"){
        sideNav.style.right = "0";
        menu.src = "images/close.png";
    }
    else{
        sideNav.style.right = "-250px";
        menu.src = "images/menu.png";
    }
}

var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	speedAsDuration: true
});

</script>

</body>
</html>
