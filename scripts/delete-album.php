<?php
    session_start();
    $connection = pg_connect($_SESSION['connection']);
    //get the name parameter from URL
    $namelink = $_GET["name"];

    //delte previous prices
    $delete = "DELETE FROM previousprice WHERE album_name='$namelink'";
    $delete = pg_query($connection,$delete);

    $delete = "DELETE FROM album WHERE name='$namelink'";
    $delete = pg_query($connection,$delete);

    if (!$delete) {
        echo "Delete failed!!";
    } else {
        header("Location: ../index.php");
    }
?>