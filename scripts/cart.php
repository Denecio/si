<?php
    $connection = pg_connect($_SESSION['connection']);
    $user = $_POST["username"];
    $compra = "SELECT id FROM purchase WHERE temp=true AND client_utilizador_username = '".$_SESSION['username']."'";
    $compra1 = pg_query($connection,$compra);
    $compra1 = pg_fetch_array($compra1);

    $balance = "SELECT balance FROM client WHERE utilizador_username = '".$_SESSION['username']."'";
    $balance1 = pg_query($connection,$balance);
    $balance1 = pg_fetch_array($balance1);

    $totalcart = "SELECT total FROM purchase WHERE client_utilizador_username = '".$_SESSION['username']."'";
    $totalcart1 = pg_query($connection,$totalcart);
    $totalcart1 = pg_fetch_array($totalcart1);

    if($balance1 > $totalcart1){

    }
    else{

    }

?>