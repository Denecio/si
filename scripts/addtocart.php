<?php
    session_start();
    $connection = pg_connect($_SESSION['connection']);
    if(isset($_POST["item_id"])){
        $item_id = $_POST["item_id"];
    }
    $id =1;
    $name = $_GET['name'];
    $alb = "SELECT * FROM album WHERE name = '$name'";
    $result = pg_query($connection, $alb);
    $result = pg_fetch_array($result);
    pg_query($connection,"INSERT INTO itemoncart (album_name,purchase_id,quantity) VALUES ('".$result['name']. "'," .$id. ",". 1 . ")");
?>