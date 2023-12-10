<?php 
    $connection = pg_connect($_SESSION['connection']);

    if ($connection === false) {
        echo "connection failed";
    } else {
        //get numberof albums per artist
        $getArtist = "SELECT artist, COUNT(*) FROM album GROUP BY artist";
        $result = pg_query($connection, $getArtist);
        if (pg_num_rows($result) > 0) {
            $row = pg_fetch_all($result);
            $artists = array();
            foreach($row as $item){
                $artists[$item['artist']] = $item['count'];
            }
        }
    }

    //print the stats
    foreach($artists as $key => $value){
        echo "<div class='stats-item'>";
        echo "<h3 class='stats-key'>".$key."</h3>";
        echo "<h4 class='stats-value'>".$value."</h4>";
        echo "</div>";
    }