<?php

session_start();

if(!isset($_SESSION['adminpass'])){
    echo '<script> alert( "You are logged out!")</script>';
    ?>
    <script>
        location.replace("../../index.php");
    </script>
    <?php
}


    $host = "localhost";
    $dbUsername = "id18887859_root";
    $dbPassword = "[46L7sjAxW44!LxK";
    $dbname = "id18887859_project";

    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    
    $id = $_GET['id'];

    $deletequery = "DELETE FROM ordermanufacturer WHERE sn = $id";

    $query = mysqli_query($conn, $deletequery);

    if($query){
        ?>
    <script>
        alert ("Row delete Successfully!");
        location.replace("../adminorders.php");
    </script>
    <?php
        }else{
            ?>
        <script>
            alert ("Row Delete Unsuccessful!");
            location.replace("../adminorders.php");
        </script>
        <?php
        }
?>
                                