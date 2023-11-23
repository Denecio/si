<?php
    //script to logout
    session_destroy();
    header("Location: ../login.php");
?>