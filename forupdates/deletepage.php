<?php

session_start();

if(!isset($_SESSION['adminpass'])){
    echo '<script> alert( "You are logged out!")</script>';
    ?>
    <script>
        location.replace("http://localhost/AutomobileWebProject/1%20homepage.php");
    </script>
    <?php
}


    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "project";

    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    
    $id = $_GET['id'];

    $deletequery = "DELETE FROM signuppage51 WHERE s_no = $id";

    $query = mysqli_query($conn, $deletequery);
    if($query){
    ?>
    <script>
        alert ("Row delete Successfully!");
        location.replace("http://localhost/AutomobileWebProject/adminconn.php");
    </script>
    <?php
        }else{
            ?>
        <script>
            alert ("Row Delete Unsuccessful!");
            location.replace("http://localhost/AutomobileWebProject/adminconn.php");
        </script>
        <?php
        }

?>
                                