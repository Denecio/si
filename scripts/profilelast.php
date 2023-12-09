<?php
    //get the name, the artist and the image of the album from the database
    $connection = pg_connect($_SESSION['connection']);
    $album = "SELECT name, artist, img FROM album";
    $result = pg_query($connection, $album);
    $result = pg_fetch_all($result);

    //print the albums
    $lastpurchases="SELECT name, artist, img FROM album WHERE name IN (SELECT album_name FROM itemoncart WHERE purchase_id IN (SELECT id FROM purchase WHERE client_utilizador_username='".$_SESSION["username"]."' and temp=false))";
    $result = pg_query($connection, $lastpurchases);
    $result = pg_fetch_all($result);

    for($i = (sizeof($result))-1; $i>(sizeof($result))-6; $i--){
        if($i>=0){
            echo "<a href='album.php?name=".$result[$i]['name']."' class='album_individual'>";
            echo "<img src='".$result[$i]['img']."' class='albIMG' alt='".$result[$i]['name']."'>";
            echo "<h3>".$result[$i]['name']."</h3>";
            echo "<h4>".$result[$i]['artist']."</h4>";
            echo "</a>";
        }
    }
?>