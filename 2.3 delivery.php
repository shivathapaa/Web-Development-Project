<?php
session_start()
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Delivery</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width =device-width, initial-scale =1">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
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
/* sidenav */
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




#deliverytype{
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
    height: 145px;
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
.table input[type="text"]{
    border: none;
    border-bottom: 1px solid #ffffff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    font-size: 16px;
}
.table2{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}
.mod-img{
    margin-top: 10%;
}
.table2-img{
    flex-basis: 25%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 10px;
    color: #fff;
    position: relative;
    padding-right: 10px;
}
.table2-img img{
    width: 100%;
    height: 100%;
    border-radius: 7px;
}
.overlay1{
    width: 95.5%;
    height: 100%;
    position: absolute;
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
        font-size: 38px;
    }
    .table p{
        font-size: 26px;
    }
}


#deliverylocation{
    padding: 40px 0 90px 0;
    background: #e2ebeb;
    position: relative;
    background: #e2ebeb;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/yescar4.jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}



#deliverydate{
    padding: 40px 0 90px 0;
    background: #e2ebeb;
    position: relative;
    background: #e2ebeb;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/third\ \(3\).jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}
.table input[type="date"]{
    border: none;
    border-bottom: 1px solid #ffffff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    font-size: 16px;
}

#deliverytime{
    padding: 40px 0 90px 0;
    background: #e2ebeb;
    position: relative;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/secondcar\ \(8\).jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}
.table input[type="time"]{
    border: none;
    border-bottom: 1px solid #ffffff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    font-size: 16px;
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
    background-color: #63ada2;
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
    color: #818d8b;
    font-style: italic;
}
@media (max-width: 1000px){
    .table3-img:hover .service-desc3{
        bottom: 15%;
        opacity: 1;
    }
    .logo2-png{
        max-width: 25%;
    }
    .table input[type="text"], .table input[type="date"], .table input[type="time"], .table input[type="submit"]{
        font-size: 24px;
    }
    .table2-img img{
        max-width: 145%;
    }
}
@media screen and (max-width: 770px){
    .service-desc h3{
        font-weight: 600;
        font-size: 10px;
    }
    .table2-img:hover .service-desc3{
        bottom: 20%;
        opacity: 1;
    }
    .logo2-png{
        max-width: 25%;
    }
}


#inputemail{
    background: #e2ebeb;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/secondcar\ \(5\).jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed
}
.service-desc3{
    width: 80%;
    position: absolute;
    bottom: 0;
    left: 88%;
    opacity: 0;
    transform: translateX(-50%);
    transition: 1s;
}
.service-desc3 h3{
    font-weight: 400;
}
.table2-1-img{
    flex-basis: 25%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 10px;
    color: #fff;
    position: relative;
    left: -11%;
    padding-right: 10px;
}
.table2-1-img img{
    max-width: 240%;
    border-radius: 7px;
}
.overlay2{
    width: 230%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: -15%;
    border-radius: 7px;
    cursor: pointer;
    background: linear-gradient(rgba(0,0,0,0.5), #009688);
    opacity: 0;
    transition: 1s;
}
.table2-1-img:hover .overlay2{
    opacity: 1;
}
.table2-1-img:hover .service-desc3{
    bottom: 37%;
    opacity: 1;
}
</style>












    <header><a href="1%20homepage.php"><img src="images/logo2.png" class="logo"></a>
        <div class="navbar">
            <ul><div class="navbar-2">
            <li><a href="1%20homepage.php">Home</a></li>
            <li><f><a href="2%20ordermanufacturer.php">Order</a></li></f>
            <li><a href="http://localhost/AutomobileWebProject/3%20project.htm">Project</a></li>
            <li><a href="http://localhost/AutomobileWebProject/4%20aboutus.htm">About Us</a></li>
            </div>
        </ul>
        </div>
    </header>
    <section class="banner-area">
        <div class="banner-img"></div>
        <h3><?php if(isset($_SESSION['passingfirstname'])){
           echo $_SESSION['passingfirstname']; echo ",";
        }
         ?> What kind of delivery do you prefer?</h3>
        <h1>Get your custom car!</h1>
    </section>
    <div id="sideNav">
        <nav>
        <ul>
            <li><a href="#top">Top</a></li>
            <li><a href="#deliverytype">Delivery</a></li>
            <li><a href="#deliverylocation">Delivery Address</a></li>
            <li><a href="#deliverydate">Delivery Date</a></li>
            <li><a href="#deliverytime">Delivery Time</a></li>
        </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" alt="Menu Botton" id="menu">
    </div>


    <section id="deliverytype">
        <div class="table">
            <h1>Delivery</h1>
            <form action="23delivery.php" method="POST" id="form3">
                <p>Delivery Type</p>
                <input type="text" name="deliverytype" placeholder="Delivery Type" list="delivery" required>
                <datalist id="delivery">
                    <option value="Normal">
                    <option value="Gift">
                </datalist>
            </form>
        </div>
        <div class="mod-img"><div class="table2">
            <div class="table2-img">
                <img src="images/normaldeliv.jpg" style="color:blue" alt="Front-face Car Image">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Normal</h3>
                </div>
            </div>
            <div class="table2-img">
                <img src="images/giftdeliv.jpg" style="color:blue" alt="Front-face Car Image">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Gift</h3>
                </div>
            </div>
            </div>
        </div>
    </section>




    <section id="deliverylocation">
        <div class="table">
            <p>Delivery Location</p>
            <input type="text" name="deliverylocation" placeholder="Enter Address" form="form3" required>
            </form>
        </div>
        <div class="mod-img"><div class="table2">
            <div class="table2-1-img">
                <img src="images/location.png" style="color:blue" alt="Front-face Car Image">
                <div class="overlay2"></div>
                <div class="service-desc3">
                    <h3>Location</h3>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    
    
    <section id="deliverydate">
        <div class="table">
            <p>Delivery Date</p>
            <input type="date" name="deliverydate" form="form3" required>
            </form>
        </div>
        <div class="mod-img"><div class="table2">
            <div class="table2-1-img">
                <img src="images/calander.png" style="color:blue" alt="Front-face Car Image">
                <div class="overlay2"></div>
                <div class="service-desc3">
                    <h3>Date</h3>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    
    

<section id="deliverytime">
    <div class="table">
        <p>Delivery Time</p>
        <input type="time" name="deliverytime" form="form3" required>
        </form>
    </div>
    <div class="mod-img"><div class="table2">
        <div class="table2-1-img">
            <img src="images/time.png" style="color:blue" alt="Front-face Car Image">
            <div class="overlay2"></div>
            <div class="service-desc3">
                <h3>Time</h3>
            </div>
        </div>
        </div>
        <input type="hidden" name="customerid" form="form3">
    </div>
    <div class="table">
        <input type="submit" name="submit" value="Submit" form="form3">
    </div>
</section>



<div class="footer">
    <a style="text-decoration:none" href="1%20homepage.php">
        <img src="images/logo2.png" style="color:blue"  alt="Company Logo" class="logo2-png"></a>
        <figcaption>We build your imagination!</figcaption>
</div>











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