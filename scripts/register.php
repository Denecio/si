<?php
    //get the connection string from connection.json
    session_start();
    $str = file_get_contents('./connection.json');
    $str = str_replace('"','', $str);

    $_SESSION['connection'] = $str;

    $connection = pg_connect($str);
    
    if (!$connection) {
        die("Erro na ligacao");
    }

    //Get the register info from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nif = $_POST['nif'];
    $balance=100;

    $_SESSION['username'] = $username;


    //convert the useranme to a string
    $username = "'".$username."'";
    $password = "'".$password."'";
    $email = "'".$email."'";

    //Check if the username is already in use
    $checkuser = 'SELECT username FROM utilizador WHERE username = '. $username;
    $result = pg_query($connection, $checkuser);
    $result = pg_fetch_array($result);

    if (!$result) {
        $newuser='INSERT INTO utilizador VALUES ('.$username.', '.$email.', '.$password.')';
        $adduser = pg_query($connection, $newuser);
        $newclient = 'INSERT INTO client (nif, balance, utilizador_username) VALUES ('.$nif.', '.$balance.', '.$username.')';
        $addclient = pg_query($connection, $newclient);
        header("Location: ../index.php");
    } else {
        print "username already in use";
    }

?>