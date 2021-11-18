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
<html lang="en">
<head>
    <title>Customer Payment Details</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
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

.recent{
    margin-top: 3rem;
    margin-bottom: 3rem;
}
.activity-grid{
    display: grid;
    grid-template-columns: 75% 25%;
    grid-column-gap: 1.5rem;
}
.activity-card, .summary-card, .profile-card{
    background: #ffffff;
    border-radius: 7px;
}
.activity-card h3{
    color: var(--text-grey);
    margin: 1rem;
}
.activity-card table{
    width: 100%;
    border-collapse: collapse;
}
.activity-card thead{
    background: #efefef;
    text-align: left;
}
th, td{
     font-size: .9rem;
     padding: 1rem .5rem;
}
th{
    color: #009680;
}
td{
    font-size: .8rem;
    color: var(--color-dark);
}
tbody tr:nth-child(even){
    background: #f9fafc;
}
.badge{
    word-spacing: 35px;
}
.badge.success{
    color: var(--main-color);
    font-size: 25px;
    transition: 1.3s;
    cursor: pointer;
}
.badge.success:hover{
    color: rgb(175, 174, 187);
}
.badge.warning{
    font-size: 25px;
    color: rgb(175, 174, 187);
    transition: 1.3s;
    cursor: pointer;
}
.badge.warning:hover{
    color: var(--main-color);
}
.td-team{
    display: flex;
    align-items: center;
}

.img-1, .img-2, .img-3, .img-4, .img-5, .img-6{
    height: 38px;
    width: 38px;
    border-radius: 50%;
    margin-left: -15px;
    border: 3px solid #efefef;
    background-size: cover;
    background-repeat: no-repeat;
}
.img-1{
    background-image: url(images1/lambo.jfif);
}
.img-2{
    background-image: url(images1/bugatti.jpg);
}
.img-3{
    background-image: url(images1/rollsroyace.jpg);
}
.img-4{
    background-image: url(images1/bmw.jfif);
}
.img-5{
    background-image: url(images1/jagure.jfif);
}
.img-6{
    background-image: url(images1/ferrari.jfif);
}
.summary-card{
    margin-bottom: 1.5rem;
    padding-top: .5rem;
    padding-bottom: .5rem;
    transition: 0.5s;
}
.summary-card:hover{
    transform: translateY(-7px);
}
.summary-single{
    padding: .3rem 1rem;
    display: flex;
    align-items: center;
}
.summary-single span{
    font-size: 1.5rem;
    color: #777;
    padding-right: 1rem;
}
.summary-single h5{
    color: var(--main-color);
    font-size: 1.1rem;
    margin-bottom: 0rem !important;
}
.summary-single h6{
    color: var(--main-color);
    font-size: 0.95rem;
    margin-bottom: 0rem !important;
}
.summary-single small{
    font-weight: 700;
    color: var(--text-grey);
}
.profile-flex{
    display: flex;
    align-items: center;
    margin-bottom: .3rem;
}
.profile-card{
    padding: 1rem;
}
.profile-img{
    height: 60px;
    width: 60px;
    border-radius: 50%;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(images1/car10.jpg);
    margin-right: .7rem;
}
.profile-info h5{
    color: #009680;
}
.text-center{
    text-align: center;
}
.text-center button{
    background: var(--main-color);
    color: #ffffff;
    border: 1px solid #009680;
    border-radius: 4px;
    padding: .4rem 1rem;
    cursor: pointer;
    transition: 0.2s;
}
.text-center button:hover{
    background: #ffffff;
    color: var(--main-color);
}
.table-responsive{
    overflow-x: auto;
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

            <h2 class="dash-title">Customer Payment</h2>

            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-user"></span>
                        <div>
                            <h5>Total Signup</h5>

                            <h4>
                            <?php
                                    $host = "localhost";
                                    $dbUsername = "root";
                                    $dbPassword = "";
                                    $dbname = "project";

                                    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                    $sql = "SELECT * FROM signuppage51";
                                    $result = $conn->query($sql);
                                    echo "$result->num_rows";
                                    ?>
                                    
                                    </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="adminconn.php">View all</p></a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Total Order</h5>
                            <h4>
                            <?php
                                    $host = "localhost";
                                    $dbUsername = "root";
                                    $dbPassword = "";
                                    $dbname = "project";

                                    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                    $sql = "SELECT * FROM ordermanufacturer";
                                    $result = $conn->query($sql);
                                    echo "$result->num_rows";
                                    ?>

                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="adminorders.php">View all</a>
                    </div>
                </div>
                            
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-comment"></span>
                        <div>
                            <h5>Feedbacks</h5>
                            <h4>                            <?php
                                    $host = "localhost";
                                    $dbUsername = "root";
                                    $dbPassword = "";
                                    $dbname = "project";

                                    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                    $sql = "SELECT * FROM feedback24";
                                    $result = $conn->query($sql);
                                    echo "$result->num_rows";
                                    ?></h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="adminfeedback.php">View all</a>
                    </div>
                </div>
            </div>

            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Billing Address</h3>
                        <div class="table-responsive">
                            <table id="table">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Customer ID</th>
                                        <th>Full Name</th>
                                        <th>Card-own Email ID</th>
                                        <th>Address</th>
                                        <th>State</th>
                                        <th>Zip Code</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>

                                
                                <?php
                                    $host = "localhost";
                                    $dbUsername = "root";
                                    $dbPassword = "";
                                    $dbname = "project";

                                    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                    $sql = "SELECT * FROM paymentdetails ORDER BY sn";
                                    $result = $conn->query($sql);
                                    $n = 0;

                                    if ($result->num_rows > 0) {
                                        while ($row = $result-> fetch_assoc()){
                                            $number = $row["sn"];
                                            echo "<tr><td>" . $row["sn"] . "</td><td>" . $row["customerid"] . "</td><td>" . $row["fullname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["aadress"] . "</td><td>" . $row["sstate"] . "</td><td>" . $row["zip"] . "</td>";
                                            $n = $n + 1 ;
                                            
                                            if($n % 2 != 0){
                                                
                                            ?>
                                        <td>
                                            <a href="forupdates/updatepage6payment.php?id=<?php echo $row["sn"]; ?>" data-toggle="tooltip" data-placement="buttom" title="Update"><span class="badge success"><i class="fa fa-pencil-square-o"></i></span></a>&nbsp;&nbsp;&nbsp;<a href="forupdates/deletepage6.php?id=<?php echo $row["sn"]; ?>" data-toggle="tooltip" data-placement="buttom" title="Delete"><span class="badge success"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                        </td>
                                        </tr>
                                            <?php 
                                            }else{

                                            ?>
                                            <td>
                                                <a href="forupdates/updatepage6payment.php?id=<?php echo $row["sn"]; ?>" data-toggle="tooltip" data-placement="buttom" title="Update"><span class="badge warning"><i class="fa fa-pencil-square-o"></i></span></a>&nbsp;&nbsp;&nbsp;<a href="forupdates/deletepage6.php?id=<?php echo $row["sn"]; ?>" data-toggle="tooltip" data-placement="buttom" title="Delete"><span class="badge warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                            </td>
                                        </tr>
                                    <?php
                                            }
                                        }
                                    } else {
                                        
                                    }
                                    $conn-> close();
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="summary">
                        <div class="summary-card">
                        <a href="adminsadmin.php"><div class="summary-single">
                                    <span class="ti-id-badge"></span>
                                    <div>
                                        <h5>Admin</h5>
                                        <small><?php
                                        $host = "localhost";
                                        $dbUsername = "root";
                                        $dbPassword = "";
                                        $dbname = "project";

                                        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                        $sql = "SELECT * FROM adminlogin";
                                        $result = $conn->query($sql);
                                        echo "$result->num_rows";
                                        ?></small>
                                    </div>
                                </div></a>
                            <div class="summary-single">
                                <span class="ti-agenda"></span>
                                <div>
                                    <h5>Web Pages</h5>
                                    <small>35 and more.</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-face-smile"></span>
                                <div>
                                    <h5>Project Status</h5>
                                    <small>Completed</small>
                                </div>
                            </div>
                        </div>

                        <div class="summary">
                                <div class="summary-card">
                                    <div class="summary-single">
                                        <div>
                                            <span class="ti-user"></span>
                                            <div>
                                            <h5>Total Logins</h5>
                                            <small>                                
                                        <?php
                                        $host = "localhost";
                                        $dbUsername = "root";
                                        $dbPassword = "";
                                        $dbname = "project";

                                        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                        $sql = "SELECT * FROM loginpage5";
                                        $result = $conn->query($sql);
                                        echo "$result->num_rows";
                                        ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="profile-card">
                            <div class="profile-flex">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <h5>Admins</h5>
                                    <small>Shiva and Suraj</small>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="aboutus.php"><button>
                                    <span class="ti-link"></span>
                                    About Us
                                </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Payment</h3>
                        <div class="table-responsive">
                            <table id="table">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Customer ID</th>
                                        <th>Name on Card</th>
                                        <th>Credit Card Number</th>
                                        <th>Expire Month</th>
                                        <th>Expire Year</th>
                                        <th>Card Verification Value</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>

                                
                                <?php
                                    $host = "localhost";
                                    $dbUsername = "root";
                                    $dbPassword = "";
                                    $dbname = "project";

                                    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                    $sql = "SELECT * FROM paymentdetails ORDER BY sn";
                                    $result = $conn->query($sql);
                                    $n = 0;

                                    if ($result->num_rows > 0) {
                                        while ($row = $result-> fetch_assoc()){
                                            $number = $row["sn"];
                                            echo "<tr><td>" . $row["sn"] . "</td><td>" . $row["customerid"] . "</td><td>" . $row["cname"] . "</td><td>" . $row["ccnum"] . "</td><td>" . $row["expmonth"] . "</td><td>" . $row["expyear"] . "</td><td>" . $row["cvv"] . "</td>";
                                            $n = $n + 1 ;
                                            ?>                                          
                                            <?php
                                            if($n % 2 != 0){
                                                
                                            ?>
                                        <td>
                                            <a href="forupdates/updatepage6.1payment.php?id=<?php echo $row["sn"]; ?>" data-toggle="tooltip" data-placement="buttom" title="Update"><span class="badge success"><i class="fa fa-pencil-square-o"></i></span></a>&nbsp;&nbsp;&nbsp;<a href="forupdates/deletepage6.php?id=<?php echo $row["sn"]; ?>" data-toggle="tooltip" data-placement="buttom" title="Delete"><span class="badge success"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                        </td>
                                        </tr>
                                            <?php 
                                            }else{

                                            ?>
                                            <td>
                                                <a href="forupdates/updatepage6.1payment.php?id=<?php echo $row["sn"]; ?>" data-toggle="tooltip" data-placement="buttom" title="Update"><span class="badge warning"><i class="fa fa-pencil-square-o"></i></span></a>&nbsp;&nbsp;&nbsp;<a href="forupdates/deletepage6.php?id=<?php echo $row["sn"]; ?>" data-toggle="tooltip" data-placement="buttom" title="Delete"><span class="badge warning"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                            </td>
                                        </tr>
                                    <?php
                                            }
                                        }
                                    } else {
                                        
                                    }
                                    $conn-> close();
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="ti-check-box"></span>
                                <div>
                                    <h5>Design Outline Orders</h5>
                                    <small><?php
                                    $host = "localhost";
                                    $dbUsername = "root";
                                    $dbPassword = "";
                                    $dbname = "project";

                                    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                    $sql = "SELECT * FROM orderpage21";
                                    $result = $conn->query($sql);
                                    $count = 0;
                                    $thcount = 0;
                                    
                                    if ($result->num_rows > 0) {
                                        while ($row = $result-> fetch_assoc()){
                                            $electrical = $row["engine"];
                                            if ($electrical == "Electrical Engine"){
                                                $count = $count + 1;
                                            }else{
                                                $thcount = $thcount + 1; 
                                            }
                                        }
                                    }else{
                                        
                                    }
                                    echo "$count + "; echo "$thcount = "; echo "$result->num_rows";
                                    ?></small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="fa fa-battery-full"></span>
                                <div>
                                    <h5>Electrical Engine</h5>
                                    <small><?php
                                    echo "$count";
                                    ?></small></small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="fa fa-cogs"></span>
                                <div>
                                    <h5>Thermal Engine</h5>
                                    <small><?php 
                                    echo "$thcount";
                                    ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="fa fa-battery-full"></span>
                                <div>
                                    <h6>Ion Drives Electrical Engine</h6>
                                    <small><?php
                                    $host = "localhost";
                                    $dbUsername = "root";
                                    $dbPassword = "";
                                    $dbname = "project";

                                    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                    $sql = "SELECT * FROM orderpage22";
                                    $result = $conn->query($sql);
                                    $ioncount = 0;
                                    $emcount = 0;
                                    $internalcount = 0;
                                    $externalcount = 0;
                                    
                                    if ($result->num_rows > 0) {
                                        while ($rrows = $result-> fetch_assoc()){
                                            if($rrows["electricalengine"] == "Ion Drives Electrical Engine" || $rrows["electricalengine"] == "EM/Cannae Drives Electrical Engine"){
                                                $electrical = $rrows["electricalengine"];
                                                if ($electrical == "Ion Drives Electrical Engine"){
                                                    $ioncount = $ioncount + 1;
                                                }else{
                                                    $emcount = $emcount + 1; 
                                                }
                                            }else{
                                                if($rrows["thermalengine"] == "Internal Combustion Engine"){
                                                    $internalcount = $internalcount + 1;
                                                }else{
                                                    $externalcount = $externalcount + 1;
                                                }
                                            }
                                        }
                                    }else{
                                        
                                    }
                                    echo "$ioncount";
                                    ?></small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="fa fa-battery-full"></span>
                                <div>
                                    <h6>EM/Cannae Drives Electrical Engine</h6>
                                    <small><?php
                                    echo "$emcount";
                                    ?></small></small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="fa fa-cogs"></span>
                                <div>
                                    <h6>Internal Combustion Engine</h6>
                                    <small><?php 
                                    echo "$internalcount";
                                    ?></small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="fa fa-cogs"></span>
                                <div>
                                    <h6>External Combustion Engine</h6>
                                    <small><?php 
                                    echo "$externalcount";
                                    ?></small>
                                </div>
                            </div>
                        </div>

</section>



        </main>

    </div>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

    
</body>
</html>





