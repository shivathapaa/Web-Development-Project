<?php
session_start();

if (isset($_SESSION['emailcheck'])){
    $_POST['customerid'] = $_SESSION['emailcheck'];


    $model = $_POST['model'];
    $chassis = $_POST['chassis'];
    $engine = $_POST['engine'];
    $transmission = $_POST['transmission'];
    $customerid = $_POST['customerid'];


    // sessionpass
    $_SESSION['thermalpass'] = 3;
    $_SESSION['electpass'] = 5;


    if (!empty($model) || !empty($chassis) || !empty($engine) || !empty($transmission) || !empty($customerid)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "project";

        // Create Connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }else{
            $SELECT ="SELECT customerid From orderpage21 Where customerid = ? Limit 3";
            $INSERT = "INSERT Into orderpage21(model, chassis, engine, transmission, customerid) values(?, ?, ?, ?, ?)";

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

                if($engine == "Thermal Engine"){
                    $_SESSION['thermalpass'] = 1;
                }else{
                    $_SESSION['electpass'] = 2;
                }

                if($email_count){
                        if(($rnum==0)){
                            $stmt->close();

                            $stmt = $conn->prepare($INSERT);
                            $stmt->bind_param("sssss", $model, $chassis, $engine, $transmission, $customerid);
                            $stmt->execute();
                            header('Location: http://localhost/AutomobileWebProject/2.2%20orderpage2.php');
                            exit;
                        }else{
                            header('Location: http://localhost/AutomobileWebProject/ordersuccessful.php');
                            exit;
                        }
                    }else{
                        echo '<script> alert( "You are logged out!")</script>';
                        ?>
                        
                        <script>
                            location.replace("http://localhost/AutomobileWebProject/2.1%20orderpage.php");
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
        location.replace("http://localhost/AutomobileWebProject/1%20homepage.php");
    </script>
    <?php
}

?>