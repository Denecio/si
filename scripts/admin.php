<?php
    //check if the key is correct
    session_start();
    
    $key = $_POST['key'];
    print $key;
    $extra = "SELECT extra FROM admin WHERE utilizador_username = '". $_SESSION['username'] ."'";
    print $extra;

    $str=pg_connect($_SESSION['connection']);
    $extra_check = pg_query($str, $extra);
    $extra_check = pg_fetch_array($extra_check);

    //if the key is correct
    if($extra_check['extra']===$key){
        print "extra";
        header("Location: ../albums.php");
    }
    else{
        print "not extra";
        header("Location: ../login-admin.php");
    }
?>