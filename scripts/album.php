<?php
    $connection = pg_connect($_SESSION['connection']);
    //get the name parameter from URL
    $name = $_GET["name"];
    //get the info from the database
    $query = "SELECT * FROM album WHERE name = '$name'";
    $result = pg_query($connection, $query);
    $result = pg_fetch_array($result);
    //store the info in variables
    //match the name of the columns in the database
    $name = $result[0];
    $units = $result[1];
    $price = $result[2];
    $artist = $result[3];
    $release_date = $result[6];
    $img = $result[7];
?>