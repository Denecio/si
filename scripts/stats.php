<?php
    $connection = pg_connect($_SESSION['connection']);

    if ($connection === false) {
        echo "connection failed";
    } else {
        $getClients = "SELECT COUNT(*) FROM client";
        $getAlbuns = "SELECT COUNT(*) FROM album";
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
    }
    //store the results in an array
    $stats = array(
        "Users" => $clients,
        "Albums" => $albuns
    );

    //print the stats
    foreach($stats as $key => $value){
        echo "<div class='stats-item'>";
        echo "<h3 class='stats-key'>".$key."</h3>";
        echo "<h4 class='stats-value'>".$value."</h4>";
        echo "</div>";
    }
?>