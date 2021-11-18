<?php
session_start();

$username = $_POST['username'];
$apassword = $_POST['password'];

if (!empty($username) || !empty($apassword)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "project";

    // Create Connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


    $sqldb = "SELECT * FROM adminlogin WHERE (adminid, adminpassword) = ('$username', '$apassword')";
    $resultadmin = $conn->query($sqldb);

    while ($rowadmin = $resultadmin-> fetch_assoc()){
        $adminid = $rowadmin['adminid'];
        $adminpassword = $rowadmin['adminpassword'];
        $adminfirstname = $rowadmin['adminfirstname'];
        $_SESSION['adminfirstname'] = $adminfirstname;
    
        if($username == $adminid && $apassword == $adminpassword){
            echo '<script> alert( "Welcome Admin!")</script>';
            $_SESSION['adminpermission'] = "helloadmin.com";
                    ?>
                    
                <script>
                    location.replace("http://localhost/AutomobileWebProject/adminconn.php");
                </script>
                <?php
        
        }
    }
    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{

        if(isset($_POST['submit'])){
        $email = $_POST['username'];

        $email_search = "select * from signuppage51 where email = '$email' ";
        $query = mysqli_query($conn,$email_search);

        $email_count = mysqli_num_rows($query);

            if($email_count){
                $email_pass = mysqli_fetch_assoc($query);
                $db_pass = $email_pass['password']; 
                $_SESSION['passingfirstname'] = $email_pass["firstname"];
                
                
                if($apassword == $db_pass){
                    echo '<script>alert("Login Successful!")</script>'; 
                    ?>
                    <script>
                        location.replace("http://localhost/AutomobileWebProject/2%20ordermanufacturer.php");
                    </script>
                        
                    <?php
                            $SELECT ="SELECT username From loginpage5 Where username = ? ";
                            $INSERT = "INSERT Into loginpage5 (username, password) values(?, ?)";
                    
                            // Prepare statement
                            $stmt = $conn->prepare($SELECT);
                            $stmt -> bind_param("s", $username);
                            $stmt -> execute();
                            $stmt -> bind_result($username);
                            $stmt -> store_result();
                            $rnum = $stmt->num_rows;
                    
                            $stmt->close();
                    
                            $stmt = $conn->prepare($INSERT);
                            $stmt->bind_param("ss", $username, $apassword);
                            $stmt->execute();
                }else{
                    echo '<script> alert( "Incorrect Password")</script>';
                    ?>
                    
                <script>
                    location.replace("http://localhost/AutomobileWebProject/5%20loginpage.htm");
                </script>
                <?php
                }
                
            }else{
                echo '<script> alert( "Invalid Email!")</script>';
                ?>
                    
                <script>
                    location.replace("http://localhost/AutomobileWebProject/5%20loginpage.htm");
                </script>
                <?php
            }
    
    $stmt->close();
    $conn->close();
        }
    }
}else{
    echo "All field are required";
    die();
}

?>
