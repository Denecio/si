<?php 
    $connection = pg_connect($_SESSION['connection']);

    if ($connection === false) {
        echo "connection failed";
    } else {
        //get numberof albums per genre
        $getGenre = "SELECT genre, COUNT(*) FROM album GROUP BY genre";
        $result = pg_query($connection, $getGenre);
        if (pg_num_rows($result) > 0) {
            $row = pg_fetch_all($result);
            $genres = array();
            foreach($row as $item){
                $genres[$item['genre']] = $item['count'];
            }
        }
    }

    //print the stats
    foreach($genres as $key => $value){
        echo "<div class='stats-item'>";
        echo "<h3 class='stats-key'>".$key."</h3>";
        echo "<h4 class='stats-value'>".$value."</h4>";
        echo "</div>";
    }