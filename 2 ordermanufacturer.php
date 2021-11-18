<?php
    session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>My Manufacturer</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width =device-width, initial-scale =1">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    
    
    #manufacturer{
        padding: 100px 0 80px 0;
        background: #e2ebeb;
        position: relative;
    }
    .title-text{
        text-align: center;
        padding-bottom: 70px;
    }
    .title-text p{
        margin: auto;
        font-size: 20px;
        color: #009688;
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
        top: -14px;
        left: 14px;
        z-index: -1;
        transform: rotate(10deg);
        border-top-left-radius: 35px;
        border-bottom-right-radius: 35px;
    }
    .title-text h1{
        font-size: 50px;
        font-weight: 500;
        color: #000000;
    }
    
    
    
    
    #manufacturer{
        background: #e2ebeb;
        background: linear-gradient(to left, rgba(0,0,0,0.5),#77b3ad), url(images1/third\ \(6\).jpg);
        -webkit-backdrop-size: cover;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
    .formmanufacturer{
        color: #000000;
        width: 366px;
        height: 615px;
        background-image: url(images1/secondcar\ \(4\).jpg);
        background-size: 100%;
        color: #ffffff;
        top: 50%;
        left: 50%;
        box-sizing: border-box;
        padding: 45px 30px;
        border-radius: 1%;
        transition: 0.5s;
    }
    .formmanufacturer:hover{
        width: 366px;
        height: 615px;
    }
    .formmanufacturer h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }
    .formmanufacturer p{
        margin: 0;
        padding: 0px;
        font-weight: bold;
    }
    .formmanufacturer input{
        width: 100%;
        margin-bottom: 20px;
    }
    .formmanufacturer input[type="text"], .formmanufacturer input[type="email"]{
        border: none;
        border-bottom: 1px solid #ffffff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #ffffff;
        font-size: 16px;
    }
    .formmanufacturer input[type="submit"]{
        border: none; 
        outline: none;
        height: 40px;
        background: #009680;
        font-size: 18px;
        border-radius: 20px;
        color: #ffffff;
        transition: 0.6s;
    }
    .formmanufacturer input[type="submit"]:hover{
        cursor: pointer;
        background: #e7e1e1;
        color: #009680;
    }
    .formmanufacturer a{
        text-decoration: none;
        font-size: 12px;
        line-height: 20px;
        color: rgb(187, 186, 186);
    }
    .formmanufacturer a:hover{
        color: #009680;
    }
    .manu-details{
        color: #000000;
        width: 20%;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        position: absolute;
        left: 3%;
        top: 52%;
    }
    .manu-details h3{
        color: #edf5f4;
        padding-bottom: 25px;
    }
    .manu-details p{
        text-align: justify;
        text-align-last:auto;
    }
    .manulogo{
        max-width: 6%;
        border-radius: 10%;
        transition: 1.5s;
        position: absolute;
        left: 10%;
        top: 40%;
        z-index: 1;
    }
    .manulogo:hover{
        max-width: 10%;
        left: 8%;
        top: 34%;
    }
    @media (max-width: 1000px){
        .formmanufacturer{
            width: 545px;
            height: 860px;
        }
        .formmanufacturer:hover{
            width: 545px;
            height: 860px;
        }
        .formmanufacturer h1{
            font-size: 36px;
            padding-bottom: 55px;
        }
        .formmanufacturer p{
            font-size: 24px;
        }
        .formmanufacturer input{
            margin-bottom: 44px;
        }
        .formmanufacturer input[type="text"], .formmanufacturer input[type="email"]{
            font-size: 22px;
        }
        .manu-details{
            left: 0.5%;
            top: 44%;
        }
        .manulogo{
            left: 7%;
            top: 36%;
        }
        .manulogo:hover{
            left: 5.5%;
            top: 32.5%;
        }
        .title-text p{
            font-size: 26px;
        }
        .formmanufacturer a{
            font-size: 16px;
        }
        .title-text p::after{
            top: -10px;
            left: 18px;
        }
    }
    @media (max-width: 770px){
        .formmanufacturer{
            width: 345px;
            height: 660px;
            position: relative;
            left: 15%;
        }
        .formmanufacturer:hover{
            width: 345px;
            height: 660px;
        }
        .formmanufacturer h1{
            font-size: 16px;
            padding-bottom: 25px;
        }
        .formmanufacturer p{
            font-size: 15px;
        }
        .formmanufacturer input{
            margin-bottom: 32px;
        }
        .formmanufacturer input[type="text"], .formmanufacturer input[type="email"]{
            font-size: 15px;
        }
        .manu-details{
            left: 0.5%;
            top: 44%;
            width: 35%;
        }
        .manulogo{
            max-width: 10%;
            left: 14%;
            top: 36%;
        }
        .manulogo:hover{
            max-width: 13%;
            left: 12.5%;
            top: 34%;
        }
        .title-text p{
            font-size: 26px;
        }
        .formmanufacturer a{
            font-size: 12px;
        }
        .title-text p::after{
            top: -10px;
            left: 18px;
        }
    }
    
    
    
    /* Manufacturers Details */
    #manufacturer-intro{
        width: 100%;
        padding: 100px 20px;
        padding-bottom: 20px;
        position: relative;
        background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/yescar3.jpg);
        -webkit-backdrop-size: cover;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    
    }
    .explain{
        text-align: center;
    }
    .explain h4{
        color: #009680;
        font-size: large;
        padding-bottom: 25px;
    }
    .explain p{
        color: #000000;
        text-align: justify;
        text-align-last:auto;
        position: relative;
        left: 18%;
    }
    .logom{
        max-width: 11%;
        opacity: 0.94;
        transition: 0.8s;
    }
    .logom:hover{
        max-width: 11.5%;
        opacity: 1;
    }
    .logom2{
        max-width: 15%;
        opacity: 0.94;
        transition: 0.8s;
    }
    .logom2:hover{
        max-width: 16%;
        opacity: 1;
    }
    .footer p{
        color: #c7c3c3;
        font-size: small;
        font-style: italic;
        transition: 2s ease;
    }
    .footer p:hover{
        color:rgb(187, 186, 186);
        font-size: 16px;
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
        font-size: 78%;
        font-weight: 600;
        color: #c0c2c2;
        font-style: italic;
        position: relative;
        margin-top: -7px;
    }
    .copyright{
        font-size: 10px;
        margin-bottom: auto;
        padding-top: 5%;
        color: #494949;
    }
    @media (max-width: 1000px){
        .explain h4{
            font-size: 24px;
        }
        .explain p{
            left: 8%;
        }
        .logom{
            max-width: 14%;
        }
        .logom:hover{
            max-width: 14.5%;
        }
        .logo2-png{
            max-width: 29%;
        }
        figcaption{
            font-size: 45%;
        }
        .copyright{
            font-size: 7px;
        }
        .footer p:hover{
            font-size: 12px;
        }
    }
    @media (max-width: 800px){
        .explain p{
            left: 2%;
        }
    }
    </style>
    
    
    
    
    
    













    <header><a href="1%20homepage.php"><img src="images/logo2.png" class="logo"></a>
        <div class="navbar">
            <ul><div class="navbar-2">
            <li><a href="1%20homepage.php">Home</a></li>
            <li><f><a href="">Order</a></li></f>
            <li><a href="http://localhost/AutomobileWebProject/3%20project.htm">Project</a></li>
            <li><a href="http://localhost/AutomobileWebProject/4%20aboutus.htm">About Us</a></li>
            </div>
        </ul>
        </div>
    </header>
    <section class="banner-area">
        <div class="banner-img"></div>
        <h3> <?php if(isset($_SESSION['passingfirstname'])){
            echo "Hello "; echo $_SESSION['passingfirstname']; echo ",";
        }
         ?> Order Now!</h3>
        <h1>Invest a day, drive your imagination.</h1>
    </section>
    <div id="sideNav">
        <nav>
        <ul>
            <li><a href="#top">Top</a></li>
            <li><a href="#manufacturer">Manufacturer</a></li>
            <li><a href="#manufacturer-intro">Manufacturers in service</a></li>
        </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" alt="Menu Botton" id="menu">
    </div>

    <section id="manufacturer">
            <div class="title-text">
                <p>Manufacturer</p>
                <h1>Choose Your Manufacturer</h1>
            </div>
            <img src="images1/manulogo.jpg" class="manulogo">
            <div class="formmanufacturer">

                <h1>Details</h1>
                <form action="2ordermanufacturer.php/" method="POST">
                    <p>Customer ID</p>
                    <input type="email" name="customerid" placeholder="Email id is usually Customer ID" minlength="14" required>
                    <p>Manufacturer Country</p>
                    <input type="text" name="country" placeholder="Manufacturer Country" required>
                    <p>Manufacturer ID</p>
                    <input type="text" name="manufacturerid" placeholder="Manufacturer ID" list="manufacturerid" minlength="6" required>
                    <datalist id="manufacturerid">
                        <option value="BMW-77">
                        <option value="FRR-9857">
                        <option value="BT-2850">
                        <option value="RR-7720">
                        <option value="LAMBO-3270">
                        <option value="JAG-9976">
                        <option value="AST-2976">
                        <option value="MER-9696">
                        <option value="AUD-7769">
                        <option value="LROV-373">
                      </datalist>
                    <p>Automobile Type</p>
                    <input type="text" name="automobiletype" placeholder="Type" list="automobiletype"  required>
                    <datalist id="automobiletype">
                        <option value="Four Wheelers">
                        <option value="Other">
                      </datalist>
                    <br><br>
                    <input type="submit" name="submit" value="Proceed">
                    <a href="http://localhost/AutomobileWebProject/5.1%20signup.htm">Sign Up</a><br>
                    <a href="#manufacturer-intro">For Details Click here!</a>
                </form>
            </div>
            <div class="manu-details">
                <h3>Manufacturer</h3>
                <p>You can choose your brand which we are in concordance with. The order will be forwarded to the your choosen manufacturer with all process in-between.<br><a style= "color: #c0c2c2;", href="#manufacturer-intro">For more details Click here!</a></p>
            </div>
    </section>
    <section id="manufacturer-intro">
        <div class="title-text">
            <p>Manufacturer Details</p>
            <h1>Manufacturers in Service</h1>
        </div>
        <div class="explain">
            <img src="images/bmw.png" class="logom">
            <h4>BMW</h4>
            <p>Bayerische Motoren Werke AG, commonly referred to as BMW is a German multinational company which produces luxury vehicles and motorcycles.<br>
                Manufacturer ID: BMW-77<br>
                <i>Available Country: </i> &nbsp;  Germany, Brazil, China, India, South Africa, the United Kingdom, the United States and Mexico</p><br><br>
            <img src="images/ferrari.png" class="logom">
            <h4>Ferrari</h4>
            <p>Ferrari is an Italian luxury sports car manufacturer based in Maranello, Italy. Founded by Enzo Ferrari in 1939 out of the Alfa Romeo race division as Auto Avio Costruzioni, the company built its first car in 1940.<br>
                Manufacturer ID: FRR-9857<br>
                <i>Available Country: </i> &nbsp; Italy, the UK, Germany, India, France, the United States, China and Switzerland
                Japan.</p><br><br>
                <img src="images/bugatti.png" class="logom">
            <h4>Bugatti</h4>
            <p>Automobiles Ettore Bugatti was a French car manufacturer of high-performance automobiles, founded in 1909 in the then-German city of Molsheim, Alsace by the Italian-born industrial designer Ettore Bugatti. The cars were known for their design beauty and for their many race victories.<br>
                Manufacturer ID: BT-2850<br>
                <i>Available Country: </i> &nbsp; Italy, the UK, Germany, France, and the United States.</p><br><br>
                <img src="images/rr.png" class="logom">
            <h4>Rolls-Royce</h4>
            <p>Rolls-Royce Holdings plc is a British multinational aerospace and defence company incorporated in February 2011 that owns Rolls-Royce, a business established in 1904 which today designs, manufactures and distributes power systems for aviation and other industries.<br>
            Manufacturer ID: RR-7720<br>
            <i>Available Country: </i> &nbsp; Italy, the UK, Germany, India, France, Germany, Brazil, the United States, China and Switzerland. </p><br><br>
            <img src="images/lambo.png" class="logom">
            <h4>Lamborghini</h4>
            <p>Automobili Lamborghini S.p.A. is an Italian brand and manufacturer of luxury sports cars and SUVs based in Sant'Agata Bolognese. The company is owned by the Volkswagen Group through its subsidiary Audi.<br>
                Manufacturer ID: LAMBO-3270<br>
            <i>Available Country: </i> &nbsp; Japan, UK, Germany, Canada, the Middle East, and China</p>
            <br><br>
            <img src="images/jaguar.png" class="logom2">
            <h4>Jaguar</h4>
            <p>Jaguar is the luxury vehicle brand of Jaguar Land Rover, a British multinational car manufacturer with its headquarters in Whitley, Coventry, England. Jaguar Cars was the company that was responsible for the production of Jaguar cars until its operations were fully merged with those of Land Rover to form Jaguar Land Rover on 1 January 2013.<br>
                Manufacturer ID: JAG-9976<br>
                <i>Available Country: </i> &nbsp; Italy, the UK, Germany, China, Brazil, India, Austria and Slovakia.</p><br><br>
            <img src="images1/austinmartin.png" class="logom2">
            <h4>Austin Martin</h4>
            <p>Aston Martin Lagonda Global Holdings plc is a British independent manufacturer of luxury sports cars and grand tourers. It was founded in 1913 by Lionel Martin and Robert Bamford. Steered from 1947 by David Brown, it became associated with expensive grand touring cars in the 1950s and 1960s, and with the fictional character James Bond following his use of a DB5 model in the 1964 film Goldfinger. Their sports cars are regarded as a British cultural icon.<br>
                Manufacturer ID: AST-2976<br>
                <i>Available Country: </i> &nbsp; Germany, China, Brazil, India, Italy, the UK, Austria and Slovakia.</p><br><br>
            <img src="images1/mercedes.png" class="logom">
            <h4>Mercedes-Benz</h4>
            <p>Mercedes-Benz is both a German automotive marque and, from late 2019 onwards, a subsidiary – as Mercedes-Benz AG – of Daimler AG.[1] Mercedes-Benz is known for producing luxury vehicles and commercial vehicles. The headquarters is in Stuttgart, Baden-Württemberg.<br>
                Manufacturer ID: MER-9696<br>
                <i>Available Country: </i> &nbsp;  Brazil, India, Austria, Italy, the UK, Germany, China and Slovakia.</p><br><br>
            <img src="images1/audi.png" class="logom2">
            <h4>Audi</h4>
            <p>Audi AG is a German automobile manufacturer that designs, engineers, produces, markets and distributes luxury vehicles. Audi is a wholly owned subdiary of the Volkswagen Group and has its roots at Ingolstadt, Bavaria, Germany.<br>
                Manufacturer ID: AUD-7769<br>
                <i>Available Country: </i> &nbsp; Germany, China, Italy, the UK, Brazil, India, Austria and Slovakia.</p><br><br>
            <img src="images1/landrover.png" class="logom2">
            <h4>Land Rover</h4>
            <p>Land Rover is a British brand of predominantly four-wheel drive, off-road capable vehicles, that is owned by multinational car manufacturer Jaguar Land Rover (JLR), since 2008 a subsidiary of India's Tata Motors. JLR currently builds Land Rovers in Brazil, China, India, Slovakia, and the United Kingdom. The Land Rover name was created in 1948 by the Rover Company for a utilitarian 4WD off-roader; yet today Land Rover vehicles comprise solely upmarket and luxury sport utility cars.<br>
                Manufacturer ID: LROV-373<br>
                <i>Available Country: </i> &nbsp; Brazil, China, India, Germany, Slovakia, and the United Kingdom.</p><br><br>

        </div>
        <div class="footer">
            <p>You can select country form the information above.</p>
        </div>
        <a style="text-decoration:none" href="1%20homepage.php"><img src="images/logo2.png" style="color:blue"  alt="Company Logo" class="logo2-png"></a>
        <figcaption>We build your imagination!</figcaption>
        <div class="copyright"><p>©ThapaKaji & Suraj</p></div>

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