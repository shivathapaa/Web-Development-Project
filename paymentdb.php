<?php
session_start();

if (isset($_SESSION['emailcheck'])){
    $_POST['customerid'] = $_SESSION['emailcheck'];


    $customerid = $_POST['customerid'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $aadress = $_POST['aadress'];
    $city = $_POST['city'];
    $sstate = $_POST['sstate'];
    $zip = $_POST['zip'];
    $cname = $_POST['cname'];
    $ccnum = $_POST['ccnum'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];


    if (!empty($fullname) || !empty($email) || !empty($aadress) || !empty($city) || !empty($customerid) || !empty($sstate) || !empty($zip) || !empty($cname) || !empty($ccnum) || !empty($expmonth) || !empty($expyear) || !empty($cvv)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "project";

        // Create Connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }else{
            $SELECT ="SELECT customerid From paymentdetails Where customerid = ? Limit 1 ";
            $INSERT = "INSERT Into paymentdetails (customerid, fullname, email, aadress, city, sstate, zip, cname, ccnum, expmonth, expyear, cvv) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Prepare sstatement
            $stmt = $conn->prepare($SELECT);
            $stmt -> bind_param("s", $customerid);
            $stmt -> execute();
            $stmt -> bind_result($customerid);
            $stmt -> store_result();
            $rnum = $stmt->num_rows;

            if(isset($_POST['submit'])){
                $emailcheckpay = $_POST['customerid'];
                
        
                $email_search = "select * from signuppage51 where email = '$emailcheckpay' ";
                $query = mysqli_query($conn,$email_search);
        
                $email_count = mysqli_num_rows($query);

                if($email_count){
                    if(($rnum==0)){
                        $stmt->close();

                        $stmt = $conn->prepare($INSERT);
                        $stmt->bind_param("ssssssssssss", $customerid, $fullname, $email, $aadress, $city, $sstate, $zip, $cname, $ccnum, $expmonth, $expyear, $cvv);
                        $stmt->execute();
                        header('Location: http://localhost/AutomobileWebProject/2.4%20feedback.php');
                        exit;
                    }else{
                        header('Location: http://localhost/AutomobileWebProject/ordersuccessful.php');
                        exit;
                    }
                }else{
                    echo '<script> alert( "You are logged out!")</script>';
                    ?>
                    
                    <script>
                        location.replace("2.2%20orderpage2.php");
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
}else{
    echo '<script> alert( "You are logged out!")</script>';
    ?>

    <script>
        location.replace("1%20homepage.php");
    </script>
    <?php
}
?>