<?php  
        session_start();
       echo"welcome" . $_SESSION['email'];

     echo "<a href='logot.php'>logout</a>";
?>