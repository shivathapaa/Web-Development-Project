<?php

session_start();

if (isset($_SESSION['emailcheck'])) {

    $_POST['emailid'] = $_SESSION['emailcheck'];

    $emailid = $_POST['emailid'];
    $fullname = $_POST['fullname'];
    $message = $_POST['message'];

    if (!empty($emailid) || !empty($fullname) || !empty($message)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "project";

        // Create Connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }else{
            $SELECT ="SELECT emailid From feedback24 Where emailid = ? ";
            $INSERT = "INSERT Into feedback24 (emailid, fullname, message) values(?, ?, ?)";

            // Prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt -> bind_param("s", $emailid);
            $stmt -> execute();
            $stmt -> bind_result($emailid);
            $stmt -> store_result();
            $rnum = $stmt->num_rows;

            if(isset($_POST['submit'])){
                $email = $_POST['emailid'];
                
        
                $email_search = "select * from signuppage51 where email = '$email' ";
                $query = mysqli_query($conn,$email_search);
        
                $email_count = mysqli_num_rows($query);
                if($email_count){
                        if(($rnum==0) || ($rnum==1)){
                            $stmt->close();
                
                            $stmt = $conn->prepare($INSERT);
                            $stmt->bind_param("sss", $emailid, $fullname, $message);
                            $stmt->execute();
                            header('Location: http://localhost/AutomobileWebProject/finalordersuccess.php');
                            exit;
                        }else{
                            header('Location: http://localhost/AutomobileWebProject/ordersuccessful.php');
                            exit;
                        }
                    }else{
                        echo '<script> alert( "You are logged out!")</script>';
                        ?>

                        <script>
                            location.replace("http://localhost/AutomobileWebProject/5%20loginpage.htm");
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
    ?>
    echo '<script> alert( "You are logged out!")</script>';
    <script>
        location.replace("http://localhost/AutomobileWebProject/1%20homepage.php");
    </script>
    <?php
}

?>