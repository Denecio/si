<?php
    session_start();

    $connection = pg_connect($_SESSION['connection']);
    $id = $_GET['id'];
    $total = $_GET['total'];

    $balance = "SELECT balance FROM client WHERE utilizador_username = '".$_SESSION['username']."'";
    $balance1 = pg_query($connection,$balance);
    $balance1 = pg_fetch_array($balance1);

    $quantidade = "SELECT quantity FROM itemoncart WHERE purchase_id = ".$id;
    $quantidade1 = pg_query($connection,$quantidade);
    $quantidade1 = pg_fetch_array($quantidade1);


    //print $itemsoncart;
    //print $compra1['total'];
    if($balance1['balance'] > $total){
        $newbalance = "UPDATE client SET balance = ".$balance1['balance']-$total." WHERE utilizador_username = '".$_SESSION['username']."'";
        $newbalance1 = pg_query($connection,$newbalance);
        //print $newbalance;

        $temporario = "UPDATE purchase SET temp = false, data = '".date("Y-m-d")."' WHERE id = ".$id;
        $temporario1 = pg_query($connection,$temporario);

        $updateunidade = "UPDATE album SET units = units-".$quantidade1['quantity'];
        $updateunidade1 = pg_query($connection,$updateunidade);

     //   header("Location: ../index.php");
        print "
            <div class='popup_pay'>
                <p> Purchase Completed :) </p>
            </div>
        ";

    }

    else{
   //     header("Location: ../addmoney.php");

        print "
        <div class='popup_pay'>
                <p> Not enough money :( </p>
        </div>";
    }
?>