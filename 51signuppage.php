<?php

session_start();


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$fulladdress = $_POST['fulladdress'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if (!empty($firstname) || !empty($lastname) || !empty($contact) || !empty($fulladdress) || !empty($email) || !empty($password) || !empty($password2)) {
    $host = "localhost";
    $dbUsername = "id18887859_root";
    $dbPassword = "[46L7sjAxW44!LxK";
    $dbname = "id18887859_project";

    // Create Connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT ="SELECT email From signuppage51 Where email = ? Limit 1";
        $INSERT = "INSERT Into signuppage51(firstname, lastname, contact, fulladdress, email, password, password2) values(?, ?, ?, ?, ?, ?, ?)";

        // Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt -> bind_param("s", $email);
        $stmt -> execute();
        $stmt -> bind_result($email);
        $stmt -> store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            if($password==$password2){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssssss", $firstname, $lastname, $contact, $fulladdress, $email, $password, $password2);
                $stmt->execute();

                $_SESSION['passingfirstname'] = $firstname;
                

                header('Location: /AutomobileWebProject/2%20ordermanufacturer.php');
                exit;
            }else{
                echo '<script>alert("Password doesnot match!")</script>'; 
                ?>
                <script>
                    location.replace("/AutomobileWebProject/5.1%20signup.htm");
                </script>
                    
                <?php
            }
        }else{
            $email_search = "select * from signuppage51 where email = '$email' ";
            $query = mysqli_query($conn,$email_search);
            $email_count = mysqli_num_rows($query);
    
            if($email_count){
                $email_pass = mysqli_fetch_assoc($query);
                $_SESSION['checkemail'] = $email_pass['email'];
               if($email == $_SESSION['checkemail']){
                
                $_SESSION['errorname'] = $email_pass['firstname'];
               }
            }
            header('Location: /AutomobileWebProject/errorpage.php');
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
