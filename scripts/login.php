<?php
    $str = "dbname=projeto user=postgres password=postgres host=localhost 
    port=5432";
    $connection = pg_connect($str);
    
    if (!$connection) {
        die("Erro na ligacao");
    }
    

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = 'SELECT * FROM utilizador WHERE username = $1 AND password = $2';
    $result = pg_query($sql);

?>