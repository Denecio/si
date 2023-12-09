<?php
    session_start();
    $connection = pg_connect($_SESSION['connection']);


    if(($_POST["balance"])!=null){
        $dinerointroduce = $_POST["balance"];

        print $dinerointroduce;
        $addmoney = "UPDATE client SET balance = balance + '".$dinerointroduce."' WHERE utilizador_username = '".$_SESSION['username']."'";
        $addmoney1 = pg_query($connection, $addmoney);
        $addmoney1 = pg_fetch_array($addmoney1);

    }
    else{

        header("Location: ../addmoney.php");
        print "
            <div class='popup_pay'>
                <p> No money added </p>
            </div>
        ";
    }
?>