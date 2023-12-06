<?php

    $connection = pg_connect($_SESSION['connection']);
    //get the name parameter from URL
    $namelink = $_GET["name"];
    //get the info from the database
    $query = "SELECT * FROM album WHERE name = '$namelink'";
    $result = pg_query($connection, $query);
    $result = pg_fetch_array($result);
    $query2 = "SELECT * FROM previousprice WHERE album_name = '$namelink' ORDER BY day DESC";
    $result2 = pg_query($connection, $query2);
    $result2 = pg_fetch_all($result2);
    //store the info in variables
    //match the name of the columns in the database
    $name = $result['name'];
    $units = $result['units'];
    $price = $result['price'];
    $artist = $result['artist'];
    $release_date = $result['release_date'];
    $img = $result['img'];

    if($result2){
        $previousPrices = "";
        foreach ($result2 as $row){
            $previousPrices = $previousPrices."<p class='previous-price'>".$row['price']."€ - ".$row['day']."</p>";
        }
    }
?>