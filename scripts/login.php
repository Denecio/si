<?php
    session_start();
    $str = file_get_contents('./connection.json');
    $str = str_replace('"','', $str);

    $_SESSION['connection'] = $str;

    $connection = pg_connect($str);
    
    if (!$connection) {
        die("Erro na ligacao");
    }
    

    $username_value = $_POST['username'];
    $password_value = $_POST['password'];

    //convert the username to a string
    $username = "'".$username_value."'";
    $password = "'".$password_value."'";

    $user = 'SELECT username, password FROM utilizador WHERE username = '. $username .' AND password = '. $password;
    
    $result = pg_query($connection, $user);
    $result = pg_fetch_array($result);

    $_SESSION['username'] = $username_value;
    $_SESSION['isadmin'] = false;
    //check if the user is an admin
    $admin = 'SELECT utilizador_username FROM admin WHERE utilizador_username = '. $username;
    $admin_check = pg_query($connection, $admin);
    $admin_check = pg_fetch_array($admin_check);
    //if there is an admin with that username
    if($admin_check){
        print "admin";
        $_SESSION['isadmin'] = true;
    }
    else{
        print "not admin";
        $_SESSION['isadmin'] = false;
    }

    //print $result[0] ." ". $result[1] . "<br/>";
    //print $username_value ." ". $password_value . "<br/>";
    if($username_value == "" || $password_value == ""){
        print "login failed";
        header("Location: ../login.php");
    }
    else if ($result[0] == $username_value && $result[1] == $password_value) {
        print "login successful";
        if($_SESSION['isadmin'] == true){
            header("Location: ../login-admin.php");
        }
        else{
            header("Location: ../index.php");
        }
    } else if($result[0] != $username_value || $result[1] != $password_value){
        print "username or password incorrect";
        header("Location: ../login.php");
    }
    
?>