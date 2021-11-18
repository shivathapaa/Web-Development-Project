<?php

session_start();

$customerid = $_POST['customerid'];
$country = $_POST['country'];
$manufacturerid = $_POST['manufacturerid'];
$automobiletype = $_POST['automobiletype'];

if(!empty($customerid) || !empty($country) || !empty($manufacturerid) || !empty($automobiletype)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "project";

    // Create Connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT ="SELECT customerid From ordermanufacturer Where customerid = ? Limit 1";
        $INSERT = "INSERT Into ordermanufacturer (customerid, country, manufacturerid, automobiletype) values(?, ?, ?, ?)";

        // Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt -> bind_param("s", $customerid);
        $stmt -> execute();
        $stmt -> bind_result($customerid);
        $stmt -> store_result();
        $rnum = $stmt->num_rows;

        if(isset($_POST['submit'])){
            $email = $_POST['customerid'];

            $_SESSION['emailcheck'] = $customerid;
    
            $email_search = "select * from signuppage51 where email = '$email' ";
            $query = mysqli_query($conn,$email_search);
    
            $email_count = mysqli_num_rows($query);
            $email_pass = mysqli_fetch_assoc($query);
            $_SESSION['emailchecksignup'] = $email_pass['email']; 
            $_SESSION['passingfirstname'] = $email_pass['firstname'];
            
    
            if($email_count){
                if($rnum==0){
                    $stmt->close();

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssss", $customerid, $country, $manufacturerid, $automobiletype);
                    $stmt->execute();
                    header('Location: http://localhost/AutomobileWebProject/2.1%20orderpage.php');
                    exit;
                }else{
                    header('Location: http://localhost/AutomobileWebProject/ordersuccessful.php');
                    exit;
                }
            }else{
                echo '<script> alert( "Invalid Customer ID!")</script>';
                ?>
                <script>
                    location.replace("http://localhost/AutomobileWebProject/2%20ordermanufacturer.php");
                </script>
                <?php
            }
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "All field are required";
    die();
}

?>