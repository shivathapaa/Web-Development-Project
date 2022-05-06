<?php

session_start();


$adminfirstname = $_POST['adminfirstname'];
$adminlastname = $_POST['adminlastname'];
$contact = $_POST['contact'];
$fulladdress = $_POST['fulladdress'];
$adminid = $_POST['adminid'];
$adminpassword = $_POST['adminpassword'];
$password2 = $_POST['password2'];

if (!empty($adminfirstname) || !empty($adminlastname) || !empty($contact) || !empty($fulladdress) || !empty($adminid) || !empty($adminpassword) || !empty($password2)) {
    $host = "localhost";
    $dbUsername = "id18887859_root";
    $dbPassword = "[46L7sjAxW44!LxK";
    $dbname = "id18887859_project";

    // Create Connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT ="SELECT adminid From adminlogin Where adminid = ? Limit 1";
        $INSERT = "INSERT Into adminlogin(adminfirstname, adminlastname, contact, fulladdress, adminid, adminpassword, password2) values(?, ?, ?, ?, ?, ?, ?)";

        // Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt -> bind_param("s", $adminid);
        $stmt -> execute();
        $stmt -> bind_result($adminid);
        $stmt -> store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            if($adminpassword==$password2){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssssss", $adminfirstname, $adminlastname, $contact, $fulladdress, $adminid, $adminpassword, $password2);
                $stmt->execute();
                

                header('Location: adminsadmin.php');
                exit;
            }else{
                echo '<script>alert("Password doesnot match!")</script>'; 
                ?>
                <script>
                    location.replace("adminsignup.php");
                </script>
                    
                <?php
            }
        }else{
            $email_search = "select * from adminlogin where adminid = '$adminid' ";
            $query = mysqli_query($conn,$email_search);
            $email_count = mysqli_num_rows($query);
    
            if($email_count){
                $email_pass = mysqli_fetch_assoc($query);
                $_SESSION['checkemail'] = $email_pass['adminid'];
               if($adminid == $_SESSION['checkemail']){
                
                $_SESSION['errorname'] = $email_pass['adminfirstname'];
               }
            }
            header('Location: errorpage.php');
            exit;
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "All field are required";
    die();
}

?>
