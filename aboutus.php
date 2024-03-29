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
    <meta charset="UTF-8">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
body{
    font-family: 'Poppins', sans-serif;
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
.navbar ul{
    list-style: none;
    float: right;
    margin-right: 4%;
    width: 105%;
    margin-top: -2.5%;
}
.navbar ul li{
    display: inline-block;
    margin-left: 20px;
    position: relative;
}
.navbar ul li a{
    text-decoration: none;
    color: #ffffff;
    font-size: 88%;
    font-size: 20px;
    text-transform: uppercase;
    transition: 1s;
}
.navbar ul li f a{
    text-decoration: none;
    color: #69c9c9;
    font-size: 88%;
    font-size: 20px;
    text-transform: uppercase;
    transition: 1s;
}
.navbar ul li a:hover{
    color: #69c9c9;
}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #77cccc;
    position: absolute;
    left: 0;
    bottom: 0px;
    transition: 0.5s;
}
.navbar ul li:hover::after{
    width: 100%;
}
@media (max-width: 1000px){
    header{
        padding: 20px 50px;
    }
    .navbar ul{
        margin-top: 0%;
        width: 105%;
    }
    .navbar ul li a{
        color: #69c9c9;
    }
    .navbar ul li a{
        font-size: 23px;
    }
    .navbar ul li f a{
        color: #fff;
    }
    .navbar ul li::after{
        width: 100%;
    }
    .logo{
        max-width: 255px;
        left: -25px;
    }
}
@media (max-width: 700px){
    .logo{
        max-width: 150px;
        position: relative;
        left: -210px;
    }
    .navbar ul{
        position: relative;
        right: -105px;
        top: -20px;
        width: 105%;
    }
    .navbar ul li{
        display: inline-block;
        margin-left: 5px;
        position: relative;
    }
    .navbar ul li a{
        font-size: 16px;
    }
    .navbar ul li f a{
        font-size: 16px;
    }
    header{
        flex-direction: column;
    }
    header .navigationbar li{
        margin: 0 7px;
    }
}
@media (max-width: 550px){
    .navbar ul{
        position: relative;
        right: -65px;
        top: -37px;
        width: 85%;
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
section p{
    max-width: 800px;
    text-align: center;
    margin-bottom: 35px;
    padding: 0 20px;
    line-height: 2;
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





#sideNav{
    width: 230px;
    height: 100vh;
    position: fixed;
    font-weight: bold;
    right: -250px;
    top: 0;
    background: #009688;
    z-index: 12;
    transition: 0.5s;
}
nav ul li{
    list-style: none;
    margin: 50px 20px;
}
nav ul li a{
    text-decoration: none;
    font-size: 18px;
    font-weight: 550;
    text-transform: uppercase;
    color: #fff;
}
#menuBtn{
    width: 50px;
    height: 50px;
    background: #009688;
    text-align: center;
    position: fixed;
    right: 30px;
    top: 35px;
    border-radius: 3px;
    z-index: 18;
    cursor: pointer;
}
#menuBtn img{
    width: 20px;
    margin-top: 15px;
}
#about1{
    background: #dae0df;
}
#about2{
    background: #e2ebeb;
}
ul.about-content{
    width: 100%;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.about-left{
    flex-basis: 40%;
    text-align: center;
}
.pro1, .pro2{
    max-width: 185px;
    transition: 1.5s;
}
.pro1:hover, .pro2:hover{
    max-width: 200px;
}
.about-right{
    flex-basis: 60%;
}

.about-area p{
    max-width: 800px;
    margin-bottom: 25px;
    line-height: 1.5;
    text-align: left;
    padding-left: 0;
    color: #000000;
    text-align: justify;
    text-align-last:auto;
}
.about-right a{
    font-size: 13px;
    background: #6b7574;
    padding: 6px 8px;
    color: #fff;
    transition: 0.6s;
}
.about-right a:hover{
    color: #000000;
    background: rgb(199, 193, 193);
    font-weight: bold;
    padding: 10px 12px;
}
.about-area h3{
    margin-bottom: 40px;
    margin-right: 100px;
    font-size: 20px;
    font-size: 20px;
    color: #009688;
}
.about-area h3 f{
    margin-bottom: 40px;
    margin-right: 50px;
    font-size: 20px;
    font-size: 20px;
    color: #009688;
}
.section-services h3, .project-area h3, .contact-area h3{
    margin: auto;
    margin-bottom: 60px;
    font-size: 20px;
    color: #009688;
    position: relative;
    z-index: 1;
    display: inline-block;
}
.section-services h3::after, .project-area h3::after, .contact-area h3::after{
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
@media (max-width: 1000px){
    .selection-title{
        font-size: 35px;
    }
    .about-area h3{
        font-size: 30px;
        margin-bottom: 25px;
        margin-right: 10px;
    }
    .about-area h3 f{
        font-size: 30px;
        margin-bottom: 25px;
        margin-right: 10px;
    }
    .section-services h3, .project-area h3, .contact-area h3{
        font-size: 29px;
    }
    .about-left, 
    .about-right{
        flex-basis: 100%;
    }
    .about-content{
        padding: 8px;
    }
    #sideNav{
        width: 230px;
        height: 100vh;
        position: fixed;
        right: -50px;
        top: 0;
        background: #009688;
        z-index: 11;
        transition: 0.5s;
    }
    nav ul li{
        list-style: none;
        margin: 50px 20px;
    }
    nav ul li a{
        text-decoration: none;
        text-transform: uppercase;
        color: #fff;
    }
    #menuBtn{
        width: 50px;
        height: 50px;
        background: #009688;
        text-align: center;
        position: fixed;
        right: 30px;
        top: 35px;
        border-radius: 3px;
        z-index: 18;
        cursor: pointer;
    }
    #menuBtn img{
        width: 20px;
        margin-top: 15px;
    }
}










#services{
    background: linear-gradient(to right, rgba(171, 185, 187, 0.8), rgba(231, 231, 231, 0.8)), url(images/carr4.jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}
ul.services-content{
    width: 100%;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
ul.services-content li{
    padding: 0 30px;
    flex-basis: 33%;
    text-align: center;
}
.services-content li h4{
    font-size: 20px;
    margin-bottom: 25px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 3px;
    color: #06554d;
}
.services-content li p{
    margin: 0;
    text-align: justify;
    text-align-last:auto;
    color: #000000;
}
@media (max-width: 1000px){
    ul.services-content li{
        width: 100%;
        padding: 30px 30px;
        flex: none;
        text-align: center;
    }
    .services-content li:last-child{
        margin-bottom: 0;
    }
    .services-content li p{
        padding: 0;
    }
}
@media (max-width: 700px){
    ul.services-content li{
        width: 100%;
        padding: 30px 30px;
        flex: none;
        text-align: center;
    }
}







#project{
    background: #e2ebeb;
}
#project .selection-title{
    color: #262626;
}
.single-service{
    flex-basis: 48%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 20px;
    color: #fff;
    position: relative;
}
.img-area{
    margin-top: 32px;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
.single-service img{
    width: 100%;
    height: 100%;
    border-radius: 3%;
    padding: 0 15px 15px;
}
.overlay{
    width: 94.5%;
    height: 93%;
    margin-left: 2.8%;
    position: absolute;
    top: 0px;
    border-radius: 0px;
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
.service-desc p{
    font-size: 14px;
    font-weight: bold;
}
.single-service:hover .service-desc{
    bottom: 40%;
    opacity: 1;
}
@media (max-width: 1000px){
    .single-service:hover .service-desc{
        transform: translate(-50%, 32%);
    }
}
@media (max-width: 770px){
    .service-desc p{
        font-size: 10px;
        font-weight: 400;
        margin-bottom: 7%;
    }
    .overlay{
        width: 88.5%;
        height: 86%;
        margin-left: 6%;
        position: absolute;
        top: 0px;
        border-radius: 0px;
        cursor: pointer;
        background: linear-gradient(rgba(0,0,0,0.5), #009688);
        opacity: 0;
        transition: 1s;
    }
}











#contact{
    background: #dae0df;
    width: 100%;
    padding: 100px 0 200px;
    position: relative;
}

.followus{
    width: 80%;
    margin-top: 310px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    position: absolute;
    margin-left: 0%;
    
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
    margin-top: -43px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    
}
.contact1, .contact2{
    padding: 5px;
    margin-bottom: 20px;
    text-align: center;
    color: #009860;
    font-size: 75%;
    
}
.contact1{
    position: relative;
    left: 8%;
}
.contact2 {
    position: relative;
    right: 8%;
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
figcaption{
    text-align: center;
    font-size: 75%;
    font-weight: 600;
    color: #009680;
    font-style: italic;
}
@media (max-width: 1000px){
    .followus{
        width: 70%;
        height: 4%;
        margin-top: 295px;
    }
    .pro1-img{
        position: relative;
        left: 4.5%;
    }
    .pro2-img{
        position: relative;
        right: 6%;
    }
    .footer-left .button:hover, .footer-right .button:hover{
        width: 35px;
    }
    .followus1{
        width: 64%;
    }
    .pro1-img, .pro2-img{
        max-width: 24%;
    }
    .contact1, .contact2{
        font-weight: bold;
    }
    .logo2-png{
        max-width: 22%;
    }
}
@media (max-width: 770px){
    .followus{
        width: 80%;
        margin-top: 250px;
    }
    .pro1-img, .pro2-img{
        max-width: 30%; 
    }
    .logo2-png{
        max-width: 22%;
    }
}
@media (max-width: 550px){
    .followus{
        width: 80%;
        margin-top: 250px;
    }
    .pro1-img, .pro2-img{
        max-width: 40%; 
    }
    .logo2-png{
        max-width: 22%;
    }
}






footer{
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    font-size: 10Px;
    flex-direction: column;
    align-items: right;
    text-align: right;
    color: #38dcc8;
    background: #e2ebeb;
    padding: 2px 0;
}
</style>






    <header><a href="../index.php"><img src="images/logo2.png" class="logo"></a>
        <div class="navbar">
            <ul><div class="navbar-2">
            <li><a href="../index.php">Home</a></li>
            <li><a href="2%20ordermanufacturer.php">Order</a></li>
            <li><a href="3%20project.htm">Project</a></li>
            <li><f><a href="">About Us</a></f></li>
            </div>
        </ul>
        </div>
    </header>
    <section class="banner-area">
        <div class="banner-img"></div>
        <h3>About Us</h3>
        <h1>Computer Science Engineering Student</h1>
    </section>
    <div id="sideNav">
        <nav>
        <ul>
            <li><a href="#top">Top</a></li>
            <li><a href="#about1">Profile Shiva Thapa</a></li>
            <li><a href="#about2">Profile Suraj Kc</a></li>
            <li><a href="#services">Our project</a></li>
            <li><a href="#project">Project Features</a></li>
            <li><a href="#contact">Follow Us</a></li>
        </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" alt="Menu Botton" id="menu">
    </div>
    <section class="about-area" id="about1">
        <h3 class="section-title">Shiva Thapa</h3>
        <ul class="about-content">
            <li class="about-left">
                <img src="images/pro1.jpg" alt="" class="pro1">
            </li>
            <li class="about-right">
                <p>I am Shiva Thapa from Syangja, Nepal. I am an active student of B.Tech Engineering in Computer Science Department. I am pursuing my Bachelors in Bangalore Technological Institute, Bangalore, India. My university seat number is 1BH18CS114.</p>
                <p>Me and my friend as a partern for this project are working on this project of <i>Automobile Database Management System.</i> This is our group project of 5th semester which is based on the Database Management System. The progress in website is our group work for the proposed project.</p>
                <a href="#contact">Know More</a>
            </li>
        </ul>
    </section>
    <section class="about-area" id="about2">
        <h3 class="section-title"><f>Suraj Kc</f></h3>
        <ul class="about-content">
            <li class="about-left">
                <img src="images/pro2.jpg" alt="" class="pro2">
            </li>
            <li class="about-right">
                <p>I am Suraj Kc from Lalitpur, Nepal. I am an active student of B.Tech Engineering in Computer Science Department. I am pursuing my Bachelors in Bangalore Technological Institute, Bangalore, India. My university seat number is 1BH18CS098.</p>
                <p>Me and my friend as a partern for this project are working on this project of <i>Automobile Database Management System.</i> This is our group project of 5th semester which is based on the Database Management System. The progress in website is our group work for the proposed project.</p>
                <a href="#contact">Know More</a>
            </li>
        </ul>
    </section>




    <section class="section-services" id="services">
        <h3 class="section-title">Our project</h3>
        <ul class="services-content">
            <li>
                <h4>Project</h4>
                <p>Our project is based on new process of ordering one's automobile. There are many peopele out there who are very fond of custom car. The custom car loses its actual top brands name in it and are not much perfect on the basis of rigidity and stability in minute parts. Therefore we bring this services among custom automobile fans with concordance with top automobile companies for manufacturing customer desired automobile.</p>
            </li>
            <li>
                <h4>Concept</h4>
                <p>The concept created due to customers interest and the company’s permission for this mega change in manufacturing of the custom automobile. The expected improvements by customers in automobile industry and their feedback pulled us towards this great project of <i>Custom Automobile Service</i>. For the services to be improved our online automobile ordering system project is created. This service easily helps your to make your custom rides.</p>
            </li>
            <li>
                <h4>Service</h4>
                <p><a href="../index.php" style="text-decoration:none; color:rgb(77, 82, 79);" ><i>Two Flames</i></a> company has been providing many services since 2019 but it was only possible to order the automobile in person with the specialists. This service has already taken benefits from the different schemes but it was difficult to handel and manage time by the customer for ordering their rides. By this website we have tried to provide you same service at ease by online method. Here, you can easily order your custom automobile.</p>
            </li>
        </ul>
    </section>



    
    <section class="project-area" id="project">
        <h3 class="section-title">Project Features</h3>
        <div class="img-area"> 
        <div class="single-service">
            <img src="images1/third (3).1.jpg" style="color:blue" alt="Front-face Car Image">
            <div class="overlay"></div>
            <div class="service-desc">
                <p>We have concordance with top automobile companies for engineering and manufacturing.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images/carr4.jpg" style="color:blue" alt="Car Interior">
            <div class="overlay"></div>
            <div class="service-desc">
                <p>Design outline provided by customer is kept at high priority for their own custom automobile.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images1/scar1.jpeg" style="color:blue" alt="Car Image">
            <div class="overlay"></div>
            <div class="service-desc">
                <p>Customer gets to choose their favourite brand to manufacture their automobile.</p>
            </div>
        </div>
        <div class="single-service">
            <img src="images1/secondcar (3).1.jpg" style="color:blue" alt="Back-face Car">
            <div class="overlay"></div>
            <div class="service-desc">
                <p>We use best automobile parts which are convienent with the customers outline designe.</p>
            </div>
        </div>
        </div>
    </section>
    <section class="contact-area" id="contact">
        <h3 class="section-title">Follow Us</h3>
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
                        <a  href="https://twitter.com/ShivaTh87362106" style="color: #1DA1F2"><i class="fa fa-twitter"></i></a>
                    </div>
                    <a  href="https://twitter.com/ShivaTh87362106" style="text-decoration: none;"><span>Twitter</span></a>
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
    </section>
    <a style="text-decoration:none" href="../index.php">
        <img src="images/logo2.png" style="color:blue"  alt="Company Logo" class="logo2-png"></a>
        <figcaption>We build your imagination!</figcaption>
    <footer>
        <p>©ThapaKaji & Suraj</p>
    </footer>


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

