<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$fulladdress = $_POST['fulladdress'];
$emailid = $_POST['emailid'];

if (!empty($firstname) || !empty($lastname) || !empty($contact) || !empty($fulladdress) || !empty($emailid)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "project";

    // Create Connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT ="SELECT emailid From forgetpassword52 Where emailid = ? ";
        $INSERT = "INSERT Into forgetpassword52 (firstname, lastname, contact, fulladdress, emailid) values(?, ?, ?, ?, ?)";

        // Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt -> bind_param("s", $emailid);
        $stmt -> execute();
        $stmt -> bind_result($emailid);
        $stmt -> store_result();
        $rnum = $stmt->num_rows;


        if(isset($_POST['submit'])){
                    if(($rnum==0) || ($rnum==1) || ($rnum==2)){


                        $emailid = $_POST['emailid'];
            
                        $email_search = "select * from signuppage51 where email = '$emailid' ";
                        $query = mysqli_query($conn,$email_search);
                
                        $email_count = mysqli_num_rows($query);
                        if($email_count){
                            $stmt->close();
            
                            $stmt = $conn->prepare($INSERT);
                            $stmt->bind_param("sssss", $firstname, $lastname, $contact, $fulladdress, $emailid);
                            $stmt->execute();
                            echo '<script>alert("Message Sent!")</script>'; 
                            ?>
                            <script>
                                location.replace("http://localhost/AutomobileWebProject/forgetgetbacksoon.php");
                            </script>
                                
                            <?php
                        }else{
                            ?>
                                echo '<script> alert( "Invalid Email!")</script>';
                            <script>
                                location.replace("http://localhost/AutomobileWebProject/5.2%20forgetpassword.htm");
                            </script>
                            <?php
                        }

                    }else{
                        header('Location: http://localhost/AutomobileWebProject/forcontactdirect.php');
                        exit;
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