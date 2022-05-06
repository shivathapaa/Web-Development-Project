<?php
    session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>My Order</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@200&display=swap" rel="stylesheet">
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
    header{
        flex-direction: column;
    }
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



/* design */
#design{
    background: #e2ebeb;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/third\ \(6\).jpg);
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
    top: 50%;
    left: 50%;
    box-sizing: border-box;
    padding: 45px 30px;
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

.table1{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}
.mod-img{
    margin-top: 10%;
}
.table1-img{
    flex-basis: 25%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 10px;
    color: #fff;
    position: relative;
    padding-right: 10px;
}
.table1-img img{
    width: 100%;
    height: 100%;
    border-radius: 7px;
}
.overlay{
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
.table1-img:hover .overlay{
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
    font-weight: 700;
}
.table1-img:hover .service-desc{
    bottom: 40%;
    opacity: 1;
}
.message{
    color: #ffffff;
    font-size: small;
    transition: 0.8s;
}
.message:hover{
    font-size: 1rem;
}
@media (max-width: 1000px){
    .table h1{
        font-size: 33px;
    }
    .table p{
        font-size: 28px;
    }
    .table input{
        font-size: 25px;
    }
}
@media screen and (max-width: 770px){
    .service-desc h3{
        font-weight: 600;
        font-size: 13px;
    }
    .table-img:hover .service-desc{
        bottom: 20%;
    }
}

/* chassis */

#chassis{
    background: #e2ebeb;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/third\ \(2\).jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}
.table2{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}
.table2-img{
    flex-basis: 30%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 10px;
    color: #fff;
    position: relative;
    padding-right: 10px;
    opacity: 0.7;
}
.table2-img img{
    width: 100%;
    height: 100%;
    border-radius: 7px;
}
.overlay1{
    width: 96.3%;
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
.table2-img:hover .service-desc{
    bottom: 40%;
    opacity: 1;
}


/* Engine */
#engine{
    background: #e2ebeb;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/third\ \(5\).jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}


/* transmission */
#transmission{
    background: #e2ebeb;
    background: linear-gradient(to bottom, rgba(0,0,0,0.5),#77b3ad), url(images1/third\ \(4\).jpg);
    -webkit-backdrop-size: cover;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}
.table3{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
    padding-bottom: 65px;
}
.table3-img{
    flex-basis: 25%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 10px;
    color: #fff;
    position: relative;
    padding-right: 10px;
    opacity: 0.7;
}
.table3-img img{
    width: 100%;
    height: 100%;
    border-radius: 7px;
}
.overlay1{
    width: 96.3%;
    height: 100%;
    position: absolute;
    top: 0px;
    border-radius: 7px;
    cursor: pointer;
    background: linear-gradient(rgba(0,0,0,0.5), #009688);
    opacity: 0;
    transition: 1s;
}
.table3-img:hover .overlay1{
    opacity: 1;
}
.service-desc3{
    width: 80%;
    position: absolute;
    bottom: 0;
    left: 50%;
    opacity: 0;
    transform: translateX(-50%);
    transition: 1s;
}
.table3-img:hover .service-desc3{
    bottom: 22%;
    opacity: 1;

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
    left: 0%;
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
    color: #009680;
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
}
@media screen and (max-width: 770px){
    .service-desc3 h3{
        font-weight: 600;
        font-size: 10px;
    }
    .table3-img:hover .service-desc3{
        bottom: 20%;
        opacity: 1;
    }
    .logo2-png{
        max-width: 25%;
    }
}

</style>




    <header><a href="../index.php.php"><img src="images/logo2.png" class="logo"></a>
        <div class="navbar">
            <ul><div class="navbar-2">
            <li><a href="../index.php">Home</a></li>
            <li><f><a href="2%20ordermanufacturer.php">Order</a></li></f>
            <li><a href="3%20project.htm">Project</a></li>
            <li><a href="4%20aboutus.htm">About Us</a></li>
            </div>
        </ul>
        </div>
    </header>
    <section class="banner-area">
        <div class="banner-img"></div>
        <h3><?php if(isset($_SESSION['passingfirstname'])){
           echo $_SESSION['passingfirstname']; echo ",";
        }
         ?>Give Design Outline</h3>
        <h1>Two Flames Automobile Service</h1>
    </section>
    <div id="sideNav">
        <nav>
        <ul>
            <li><a href="#top">Top</a></li>
            <li><a href="#design">Model</a></li>
            <li><a href="#chassis">Chassis</a></li>
            <li><a href="#engine">Engine</a></li>
            <li><a href="#transmission">Transmission</a></li>
        </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" alt="Menu Botton" id="menu">
    </div>
    


<!-- Table -->

        
    <section id="design">
        <div class="table">
            <h1>Design</h1>
            <form action="21orderpage.php/" method="POST" id="form1">
                <p>Model</p>
                <input type="text" name="model" placeholder="Enter Model" list="mod"  required>
                <datalist id="mod">
                    <option value="SUVs">
                    <option value="Sports">
                    <option value="Classical">
                    <option value="Luxury">
                    <option value="Vintage">
                    <option value="Sedan">
                    <option value="Modern">
                    <option value="Coupe">
                </datalist>
                <datalist id="chass">
                    <option value="Ladder Frame">
                    <option value="Tabular Frame">
                    <option value="Monocoque Frame">
                    <option value="Rolling Frame">
                    <option value="Backbone Frame">
                </datalist>
                <datalist id="eng">
                    <option value="Thermal Engine">
                    <option value="Electrical Engine">
                </datalist>
                <datalist id="trans">
                    <option value="Automatic Transmission">
                    <option value="Manaul Transmission">
                    <option value="Automatic Manaul Transmission">
                    <option value="Continuously Variable Transmission">
                </datalist>
            </form>
        </div>
        <div class="mod-img"><div class="table1">
            <div class="table1-img">
                <img src="images/suv.jfif" style="color:blue" alt="Front-face Car Image">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>SUVs</h3>
                </div>
            </div>
            <div class="table1-img">
                <img src="images/sports.jpg" style="color:blue" alt="Car Interior">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Sports</h3>
                </div>
            </div>
            <div class="table1-img">
                <img src="images/classical.jfif" style="color:blue" alt="Car Image">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Classical</h3>
                </div>
            </div>
            <div class="table1-img">
                <img src="images/luxury.jfif" style="color:blue" alt="Back-face Car">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Luxury</h3>
                </div>
            </div>
            <div class="table1-img">
                <img src="images/vintage.jpg" style="color:blue" alt="Back-face Car">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Vintage</h3>
                </div>
            </div>
            <div class="table1-img">
                <img src="images/sedan.jfif" style="color:blue" alt="Back-face Car">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Sedan</h3>
                </div>
            </div>
            <div class="table1-img">
                <img src="images/modern.jpg" style="color:blue" alt="Back-face Car">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Modern</h3>
                </div>
            </div>
            <div class="table1-img">
                <img src="images/coupe.jfif" style="color:blue" alt="Back-face Car">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Coupe</h3>
                </div>
            </div>
            </div>
        </div>
        <div class="message">Place cursor in image to know more.</div>
    </section>


    <!-- chassis -->

    <section id="chassis">
        <div class="table">
            <p>Chassis</p>
            <input type="text" name="chassis" placeholder="Enter Chassis Design"  list="chass" form="form1" required>
        </div>
        <div class="mod-img"><div class="table2">
            <div class="table2-img">
                <img src="images/ladder.jpg" style="color:blue" alt="Front-face Car Image">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Ladder Frame</h3>
                </div>
            </div>
            <div class="table2-img">
                <img src="images/tabular.jfif" style="color:blue" alt="Car Interior">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Tabular Frame</h3>
                </div>
            </div>
            <div class="table2-img">
                <img src="images/monocoque.jfif" style="color:blue" alt="Car Image">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Monocoque Frame</h3>
                </div>
            </div>
            <div class="table2-img">
                <img src="images/rolling.jpg" style="color:blue" alt="Back-face Car">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Rolling Frame</h3>
                </div>
            </div>
            <div class="table2-img">
                <img src="images/backbone.jpg" style="color:blue" alt="Back-face Car">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Backbone Frame</h3>
                </div>
            </div>
            </div>
        </div>

    </section>



    <!-- enigne -->

    <section id="engine">
        <div class="table">
            <p>Engine</p>
            <input type="text" name="engine" placeholder="Enter Engine Design" list="eng" form="form1" required>
        </div>
        <div class="mod-img"><div class="table2">
            <div class="table2-img">
                <img src="images/thermal.jfif" style="color:blue" alt="Front-face Car Image">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Thermal Engine</h3>
                </div>
            </div>
            <div class="table2-img">
                <img src="images/elect.jfif" style="color:blue" alt="Car Interior">
                <div class="overlay1"></div>
                <div class="service-desc">
                    <h3>Electrical Engine</h3>
                </div>
            </div>
            </div>
        </div>
    </section>


    <!-- transmission -->
    <section id="transmission">
        <div class="table">
            <p>Transmission</p>
            <input type="text" name="transmission" placeholder="Enter Transmission Design" list="trans" form="form1" required>
        </div>
        <div class="mod-img"><div class="table3">
            <div class="table3-img">
                <img src="images/automatic.jfif" style="color:blue" alt="Front-face Car Image">
                <div class="overlay1"></div>
                <div class="service-desc3">
                    <h3>Automatic Transmission</h3>
                </div>
            </div>
            <div class="table3-img">
                <img src="images/manaul.jpg" style="color:blue" alt="Car Interior">
                <div class="overlay1"></div>
                <div class="service-desc3">
                    <h3>Manaul Transmission</h3>
                </div>
            </div>
            <div class="table3-img">
                <img src="images/automanu.jfif" style="color:blue" alt="Car Image">
                <div class="overlay1"></div>
                <div class="service-desc3">
                    <h3>Automatic Manaul Transmission</h3>
                </div>
            </div>
            <div class="table3-img">
                <img src="images/continue.jfif" style="color:blue" alt="Back-face Car">
                <div class="overlay1"></div>
                <div class="service-desc3">
                    <h3>Continuously Variable Transmission</h3>
                </div>
            </div>
            <input type="hidden" name="customerid" form="form1">
            <div class="table">
            <input type="submit" name="submit" value="Submit" form="form1">
        </div>
            </div>

    </section>




    <div class="footer">
        <a style="text-decoration:none" href="../index.php">
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
