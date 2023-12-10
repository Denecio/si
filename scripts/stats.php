<?php
    $connection = pg_connect($_SESSION['connection']);

    if ($connection === false) {
        echo "connection failed";
    } else {
        $getClients = "SELECT COUNT(*) FROM client";
        $getAlbuns = "SELECT COUNT(*) FROM album";
        $getValue = "SELECT units, price FROM album";
        $getPurchases= "SELECT COUNT(*) FROM purchase WHERE temp=false";
        $getProfit = "SELECT SUM(price) FROM album WHERE name in (SELECT album_name FROM itemoncart)";

        $result = pg_query($connection, $getClients);
        if (pg_num_rows($result) > 0) {
            $row = pg_fetch_array($result);
            $clients = $row[0];
        }
        $result = pg_query($connection, $getAlbuns);
        if (pg_num_rows($result) > 0) {
            $row = pg_fetch_array($result);
            $albuns = $row[0];
        }
        $result = pg_query($connection, $getValue);
        
        if (pg_num_rows($result) > 0) {
            $row = pg_fetch_all($result);
            $value = 0;
            foreach($row as $item){
                $value += $item['units'] * $item['price'];
            }
        }
        $result = pg_query($connection, $getPurchases);
        if (pg_num_rows($result) > 0) {
            $row = pg_fetch_array($result);
            $purchases = $row[0];
        }

        $result = pg_query($connection, $getProfit);
        if (pg_num_rows($result) > 0) {
            $row = pg_fetch_array($result);
            $total = $row[0];
        }
    }
    //store the results in an array
    $stats = array(
        "Users" => $clients,
        "Albums" => $albuns,
        "Store Value" => $value."€",
        "Purchases" => $purchases,
        "Total Made" => $total."€"
    );

    //print the stats
    foreach($stats as $key => $value){
        echo "<div class='stats-item'>";
        echo "<h3 class='stats-key'>".$key."</h3>";
        echo "<h4 class='stats-value'>".$value."</h4>";
        echo "</div>";
    }
?>