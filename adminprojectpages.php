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
<html lang="en">
<head>
    <title>Project Admin</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
</head>
<body>

<style>
    

:root{
    --main-color: #009680;
    --color-dark: #1D2231;
    --text-grey: #8390A2;
}

*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style-type: none;
    box-sizing: border-box;
}
#sidebar-toggle{
    display: none;
}
.sidebar{
    height: 100%;
    width: 240px;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 100;
    background: var(--main-color);
    color: #ffffff;
    overflow-y: auto;
    transition: width 500ms;
}
.sidebar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    padding: 0rem 1rem;
    font-size: 1.2rem;
}
.brand{
    cursor: pointer;
}
.name{
    font-size: 34px;
    font-family: 'Kaushan Script', cursive;
}
.ti-menu-alt{
    cursor: pointer;
}
.sidebar-menu{
    padding: 1rem;
    padding-top: 2rem;
}
.sidebar li{
    margin-bottom: 2rem;
}
.sidebar a{
    color: #ffffff;
    font-size: 1.3rem;
}
.sidebar a span:last-child{
    padding-left: .6rem;
}
#sidebar-toggle:checked ~ .sidebar{
    width: 60px;
}
#sidebar-toggle:checked ~ .sidebar .sidebar-header h3 span,
#sidebar-toggle:checked ~ .sidebar li span:last-child{
    display: none;
}
#sidebar-toggle:checked ~ .sidebar .sidebar-header,
#sidebar-toggle:checked ~ .sidebar li{
    display: flex;
    justify-content: center;
}
#sidebar-toggle:checked ~ .main-content{
    margin-left: 60px;
}
#sidebar-toggle:checked ~ .main-content header{
    left: 60px;
}
.main-content{
    position: relative;
    margin-left: 240px;
    transition: margin-left 500ms;
}
header{
     position: fixed;
     left: 240px;
     top: 0;
     z-index: 100;
     width: calc(100% - 240px);
     background: #ffffff;
     height: 60px;
     padding: 0rem 1rem;
     display: flex;
     align-items: center;
     justify-content: space-between;
     border-bottom: 1px solid #cccccc;
     transition: left 500ms;
}
.welcome p{
    color: #009680;
    font-weight: 500;
    font-size: 26px;
}
.social-icons{
    display: flex;
}
.social-icons a{
    margin-top: 0.5rem;
    font-size: 26px;
}
.social-icons a, .social-icons div{
    margin-left: 1.2rem;
}
.social-icons div{
    height: 38px;
    width: 38px;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(images1/yescar1.jpg);
    border-radius: 50%;
}
main{
    margin-top: 60px;
    background: #f1f5f9;
    min-height: 90vh;
    padding: 1rem 3rem;
}
.dash-title{
    color: var(--color-dark);
    margin-bottom: 1rem;
}
.dash-cards{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: 3rem;
}
.card-single{
    background: #ffffff;
    border-radius: 7px;
    box-shadow: 3px 3px 4px rgba(0,0,0,0.2);
    transition: transform .5s;
    cursor: pointer;
    margin-bottom: 3rem;
}
.card-single:hover{
    transform: translateY(-7px);
}
.card-body{
    padding: 1.3rem 1rem;
    display: flex;
    align-items: center;
}
.card-body span{
    font-size: 1.7rem;
    color: #777777;
    padding-right: 1.4rem;
}
.card-body h5{
    color: #009680;
    font-size: 1rem;
}
.card-body h4{
    color: var(--color-dark);
    font-size: 1.1rem;
    margin-top: .2rem;
}
.card-footer{
    padding: .2rem 1rem;
    background: #f9fafc;
}
.card-footer a{
    color: var(--main-color);
}
.card-body1 h5{
    color:  #777777;
    font-size: 1rem;
}
.card-footer1 a{
    color: var(--text-grey);
}
.card-body1{
    padding: 1.3rem 1rem;
    display: flex;
    align-items: center;
}
.card-body1 span{
    font-size: 1.7rem;
    color: #777777;
    padding-right: 1.4rem;
}
.card-body1 h4{
    color: var(--color-dark);
    font-size: 1.1rem;
    margin-top: .2rem;
}
.card-footer1{
    padding: .2rem 1rem;
    background: #f9fafc;
}
.card-body1 span{
    font-size: 1.7rem;
    color: #777777;
    padding-right: 1.4rem;
}
@media only screen and (max-width: 1200px){
    .sidebar{
        width: 60px;
        z-index: 150;
    }
    .sidebar .sidebar-header h3 span,
    .sidebar li span:last-child{
        display: none;
    }
    .sidebar .sidebar-header,
    .sidebar li{
        display: flex;
        justify-content: center;
    }
    .main-content{
        margin-left: 60px;
    }
    .main-content header{
        left: 60px;
        width: calc(100% - 60px);
    }
    #sidebar-toggle:checked ~ .sidebar{
        width: 240px;
    }
    #sidebar-toggle:checked ~ .sidebar .sidebar-header h3 span,
    #sidebar-toggle:checked ~ .sidebar li span:last-child{
        display: inline;
    }
    #sidebar-toggle:checked ~ .sidebar .sidebar-header{
        display: flex;
        justify-content: space-between;
    }
    #sidebar-toggle:checked ~ .sidebar li{
        display: block;
    }
    #sidebar-toggle:checked ~ .main-content{
        margin-left: 240px;
    }
    #sidebar-toggle:checked ~ .main-content header{
        left: 60px;
    }
}
@media only screen and (max-width: 860px){
    .dash-cards{
        grid-template-columns: repeat(2, 1fr);
    }
    .card-single{
        margin-bottom: 1rem;
    }
    .activity-grid{
        display: block;
    }
    .summary{
        margin-top: 1.5rem;
    }
}
@media only screen and (max-width: 600px){
    .dash-cards{
        grid-template-columns: 100%;
    }
}
@media only screen and (max-width: 450px){
    main{
        padding-left: 1rem;
        padding-right: 1rem;
    }
}
</style>





<input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
            <a  href="1%20homepageadmin.php"><span class="name">Two Flames</span></a>
            </h3>
            <label for="sidebar-toggle" class="fa fa-bars"></label>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="1%20homepageadmin.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li><a href="adminconn.php">
                        <span class="fa fa-bar-chart"></span>
                        <span>Overview</span>
                    </a>
                </li>
                <li><a href="adminorders.php">
                        <span class="ti-clipboard"></span>
                        <span>Orders</span>
                    </a>
                </li>
                <li><a href="admindelivery.php">
                        <span class="fa fa-shopping-cart"></span>
                        <span>Delivery</span>
                    </a>
                </li>
                <li><a href="adminpaymentdetails.php">
                        <span class="fa fa-credit-card"></span>
                        <span>Payment</span>
                    </a>
                </li>
                <li><a href="adminfeedback.php">
                        <span class="ti-comment"></span>
                        <span>Feedback</span>
                    </a>
                </li>
                <li><a href="adminprojectpages.php">
                        <span class="ti-folder"></span>
                        <span>Project</span>
                    </a>
                </li>
                <li><a href="aboutus.php">
                        <span class="fa fa-address-card-o"></span>
                        <span>Team Detail</span>
                    </a>
                </li>
                <li><a href="adminlogout.php">
                        <span class="fa fa-sign-out"></span>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    

    <div class="main-content">

        <header>
        <div class="welcome"><p>Admin <?php echo $_SESSION['adminfirstname']; ?></p></div>

            <div class="social-icons">
            <a href="adminfeedback.php"><span class="ti-comment"></span></a>
                <div></div>
            </div>
        </header>

        <main>

            <h2 class="dash-title">Web Pages</h2>

            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-home"></span>
                        <div>
                            <h5>Hompage</h5>
                            <h4>1</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../index.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body1">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Order Manufacturer</h5>
                            <h4>2</h4>
                        </div>
                    </div>
                    <div class="card-footer1">
                        <a href="2%20ordermanufacturer.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Outline Design</h5>
                            <h4>3</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="2.1%20orderpage.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Engine Order</h5>
                            <h4>4</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="2.2%20orderpage2.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body1">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Delivery</h5>
                            <h4>5</h4>
                        </div>
                    </div>
                    <div class="card-footer1">
                        <a href= "2.3%20delivery.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Feedbacks</h5>
                            <h4>6</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="2.4%20feedback.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Project Details</h5>
                            <h4>7</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/3%20project.htm">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body1">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>About Us</h5>
                            <h4>8</h4>
                        </div>
                    </div>
                    <div class="card-footer1">
                        <a href="/4%20aboutus.htm">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>User Login Page</h5>
                            <h4>9</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/5%20loginpage.htm">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>User SignUp page</h5>
                            <h4>10</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/5.1%20signup.htm">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body1">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>User Forget Password</h5>
                            <h4>11</h4>
                        </div>
                    </div>
                    <div class="card-footer1">
                        <a href="/5.2%20forgetpassword.htm">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Registered Error</h5>
                            <h4>12</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="errorpage.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Order Successful</h5>
                            <h4>13</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="finalordersuccess.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body1">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Directed: Contact</h5>
                            <h4>14</h4>
                        </div>
                    </div>
                    <div class="card-footer1">
                        <a href="forcontactdirect.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="fa fa-external-link"></span>
                        <div>
                            <h5>Direction: Forget Password</h5>
                            <h4>15</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="forgetgetbacksoon.php">Visit <p class="fa fa-external-link-square"></p></a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>