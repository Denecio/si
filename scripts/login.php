<?php
    session_start();
    $str = "dbname=projeto user=postgres password=postgres host=localhost port=5432";
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

    print $result[0] ." ". $result[1] . "<br/>";
    if ($result[0] == $username_value && $result[1] == $password_value) {
        print "login successful";
        header("Location: ../index.php");
    } else {
        print "login failed";
    }
?>