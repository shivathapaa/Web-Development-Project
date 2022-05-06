<?php
session_start();
if (isset($_SESSION['emailcheck'])){
    $_POST['customerid'] = $_SESSION['emailcheck'];


    $customerid = $_POST['customerid'];
    $electricalengine = $_POST['electricalengine'];
    $thermalengine = $_POST['thermalengine'];


    if (!empty($customerid)){
        $host = "localhost";
        $dbUsername = "id18887859_root";
        $dbPassword = "[46L7sjAxW44!LxK";
        $dbname = "id18887859_project";

        // Create Connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }else{
            $SELECT ="SELECT customerid From orderpage22 Where customerid = ? Limit 1";
            $INSERT = "INSERT Into orderpage22 (customerid, electricalengine, thermalengine) values(?, ?, ?)";

            // Prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt -> bind_param("s", $customerid);
            $stmt -> execute();
            $stmt -> bind_result($customerid);
            $stmt -> store_result();
            $rnum = $stmt->num_rows;

            if(isset($_POST['submit'])){
                $email = $_POST['customerid'];
                
        
                $email_search = "select * from signuppage51 where email = '$email' ";
                $query = mysqli_query($conn,$email_search);
        
                $email_count = mysqli_num_rows($query);
                if($email_count){
                        if($rnum==0){
                            $stmt->close();
                
                            $stmt = $conn->prepare($INSERT);
                            $stmt->bind_param("sss", $customerid, $electricalengine, $thermalengine);
                            $stmt->execute();
                            header('Location: /AutomobileWebProject/2.3%20delivery.php');
                            exit;
                        }else{
                            header('Location: /AutomobileWebProject/ordersuccessful.php');
                            exit;
                        }
                    }else{
                        echo '<script> alert( "You are logged out!")</script>';
                        ?>
                       
                        <script>
                            location.replace("/AutomobileWebProject/2.2%20orderpage2.php");
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
        location.replace("../index.php");
    </script>
    <?php
}

?>