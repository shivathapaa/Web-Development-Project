<?php

session_start();

if(!isset($_SESSION['adminpass'])){
    echo '<script> alert( "You are logged out!")</script>';
    ?>

    <script>
        location.replace("1%20homepage.php");
    </script>
    <?php
}
?>



<?php

// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>
<script>
    location.replace("1%20homepage.php");
</script>