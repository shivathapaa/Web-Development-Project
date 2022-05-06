<?php

session_start();

if(!isset($_SESSION['adminpass'])){
    echo '<script> alert( "You are logged out!")</script>';
    ?>
    <script>
        location.replace("../../index.php");
    </script>
    <?php
}


?>



<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Welcome Admin</title>
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
input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus, 
    input:-webkit-autofill:active  {
        transition: background-color 5000s ease-in-out 0s;
        -webkit-text-fill-color: rgb(255, 255, 255) !important;
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

.tablesplit{
    margin-top: 45px;
    display: flex;
    background:
    linear-gradient(rgba(233, 43, 18, 0.534), transparent),
    linear-gradient(to top left, lime, transparent),
    linear-gradient(to top right, blue, transparent);
    user-select: none;
    background-blend-mode: screen;
    border-radius: 2%;
    opacity: 1;
}
.tablecontent{
    width: 40%;
    border: transparent;
    background:
        linear-gradient(rgba(207, 18, 18, 0.836), transparent),
        linear-gradient(to top left, lime, transparent),
        linear-gradient(to top right, blue, transparent);
        border-bottom-left-radius: 45% 25%;
        border-top-right-radius: 45% 40%;
        user-select: none;
    background-blend-mode: screen;
}
.tablecontent h2{
    text-align: center;
    margin-top: 1.7rem;
    color: #ffffff;
}
.tablecontent p{
    margin-top: 6rem;
    text-align: center;
    color: #ffffff;
}
.tablecontent button{
    position: absolute;
    top: 68%;
    left: 18%;
    color: #009680;
    background: #ffffff;
    border-color: transparent;
    padding: 0.8rem;
    border-radius: 100%;
    font-size: 14px;
    cursor: pointer;
    z-index: 1;
}
.update-table{
    margin-left: auto;
    margin-right: auto;
    background-color: transparent;
}
.update-table p{
    color: #ffffff;
}
.update-table h2{
    margin-top: 20px;
    text-align: center;
    color: #ffffff;
}
.class-table{
    margin-top: 20px;
text-align: center;
}
.class-table input{
    width: 60%;
    margin-bottom: 20px;
}
.class-table input[type="text"], .class-table input[type="date"], .class-table input[type="time"]{
    border: none;
    border-bottom: 1px solid #ffffff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    font-size: 13px;
}
.class-table input[type="submit"]{
    width: 25%;
    border: none; 
    outline: none;
    cursor: pointer;
    background: #e7e1e1;
    color: #009680;
    border-radius: 20px;
    font-size: 18px;
    margin-top: 20px;
    margin-bottom: 35px;
}
.sn{
    color: #ffffff;
    text-align: left;
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
    .tablesplit{
        display: block;
    }
    .tablecontent{
    display: none;
    }
    .update-table h2{
        padding-top: 20px;
    }
    .sn{
        text-align: left;
        margin-left: 15px;
    }
    .class-table input[type="submit"]{
        font-size: 10px;
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
        <a  href="../1%20homepageadmin.php"><span class="name">Two Flames</span></a>
        </h3>
        <label for="sidebar-toggle" class="fa fa-bars"></label>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li><a href="../1%20homepageadmin.php">
                    <span class="ti-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li><a href="../adminconn.php">
                    <span class="fa fa-bar-chart"></span>
                    <span>Overview</span>
                </a>
            </li>
            <li><a href="../adminorders.php">
                    <span class="ti-clipboard"></span>
                    <span>Orders</span>
                </a>
            </li>
            <li><a href="../admindelivery.php">
                    <span class="fa fa-shopping-cart"></span>
                    <span>Delivery</span>
                </a>
            </li>
            <li><a href="../adminpaymentdetails.php">
                    <span class="fa fa-credit-card"></span>
                    <span>Payment</span>
                </a>
            </li>
            <li><a href="../adminfeedback.php">
                    <span class="ti-comment"></span>
                    <span>Feedback</span>
                </a>
            </li>
            <li><a href="../adminprojectpages.php">
                    <span class="ti-folder"></span>
                    <span>Project</span>
                </a>
            </li>
            <li><a href="../aboutus.php">
                    <span class="fa fa-address-card-o"></span>
                    <span>Team Detail</span>
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="main-content">

    <header>
            <div class="welcome"><p>Admin <?php echo $_SESSION['adminfirstname']; ?></p></div>

        <div class="social-icons">
        <a href="../adminfeedback.php"><span class="ti-comment"></span></a>
            <div></div>
        </div>
    </header>

    <main>

        <h2 class="dash-title">Overview</h2>

        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-user"></span>
                    <div>
                        <h5>Total Signup</h5>

                        <h4>
                        <?php
                                $host = "localhost";
                                $dbUsername = "id18887859_root";
                                $dbPassword = "[46L7sjAxW44!LxK";
                                $dbname = "id18887859_project";

                                $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                $sql = "SELECT * FROM signuppage51";
                                $result = $conn->query($sql);
                                echo "$result->num_rows";
                                ?>
                                
                                </h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="../adminconn.php">View Below   <p class="fa fa-hand-o-down"> </p></a>
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
                                $dbUsername = "id18887859_root";
                                $dbPassword = "[46L7sjAxW44!LxK";
                                $dbname = "id18887859_project";

                                $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                $sql = "SELECT * FROM ordermanufacturer";
                                $result = $conn->query($sql);
                                echo "$result->num_rows";
                                ?>

                        </h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="../adminorders.php">View all</a>
                </div>
            </div>
                        
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-comment"></span>
                    <div>
                        <h5>Feedbacks</h5>
                        <h4>                            
                            <?php
                                $host = "localhost";
                                $dbUsername = "id18887859_root";
                                $dbPassword = "[46L7sjAxW44!LxK";
                                $dbname = "id18887859_project";

                                $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
                                $sql = "SELECT * FROM feedback24";
                                $result = $conn->query($sql);
                                echo "$result->num_rows";
                                ?></h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="../adminfeedback.php">View all</a>
                </div>
            </div>
        </div>


        <section class="tablebox">
            <div class="tablesplit">
                <div class="tablecontent">
                    <h2>Data Update</h2>
                    <p>Fill the deatails <br>carefully!</p><br>
                    <a href="../adminsadmin.php"><button type="button">Check Table</button></a>
                    
                </div>
                <div class="update-table">
                    <h2>Update table with confidence!</h2>
                    <form action="" method="POST">
                    <div class="class-table">
                    <?php
                        $host = "localhost";
                        $dbUsername = "id18887859_root";
                        $dbPassword = "[46L7sjAxW44!LxK";
                        $dbname = "id18887859_project";

                        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);


                        $ids = $_GET['id'];

                        $sql = "SELECT * FROM adminlogin WHERE sn = {$ids}";
                        $result = $conn->query($sql);
                        
                        $dataall = $result-> fetch_assoc();

                        if(isset($_POST['submit'])){

                            $idupdate = $_GET['id'];

                            $adminid = $_POST['adminid'];
                            $adminfirstname = $_POST['adminfirstname'];
                            $adminlastname = $_POST['adminlastname'];
                            $contact = $_POST['contact'];
                            $fulladdress = $_POST['fulladdress'];

                            $query = "update adminlogin set adminid ='$adminid', adminlastname ='$adminlastname', adminfirstname ='$adminfirstname', contact='$contact', fulladdress='$fulladdress' WHERE sn = $idupdate ";

                            $ress = mysqli_query($conn, $query);

                            if ($ress){
                                ?>
                                <script>
                                    alert ("Data updated Successfully!");
                                    location.replace("../adminsadmin.php");
                                </script>
                                <?php
                            }else{
                                ?>
                            <script>
                                alert ("Data update Unsuccessful!");
                            </script>
                            <?php
                            }
                        }
                        $conn-> close();
                        
                        
                        

                    ?>

                        <div class="sn"><h5>S.N - <?php echo $ids; ?></h5></div>
                        <p>Admin First Name</p>
                        <input type="text" placeholder="Enter Admin First Name" name="adminfirstname" value="<?php echo $dataall["adminfirstname"] ?>"><br>
                        <p>Admin Last Name</p>
                        <input type="text" placeholder="Enter Admin  LastName" name="adminlastname" value="<?php echo $dataall["adminlastname"] ?>"><br>
                        <p>Admin ID</p>
                        <input type="text" placeholder="Enter Admin ID" name="adminid" value="<?php echo $dataall["adminid"] ?>"><br>
                        <p>Contact</p>
                        <input type="text" placeholder="Enter Contact" name="contact" maxlength="14" value="<?php echo $dataall["contact"] ?>"><br>
                        <p>Full Address</p>
                        <input type="text" placeholder="Enter Full Address" name="fulladdress" value="<?php echo $dataall["fulladdress"] ?>"><br><br>
                        <input type="submit" value="Update" name="submit">
                    </div>
                    </form>
                </div>
            </div>



        </section>
    </main>
</div>


    </body>
</html>