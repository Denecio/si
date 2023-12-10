<?php
    if (isset($_GET["submit"])){
        $cenas=$_GET['submit'];
        if($cenas=="stock"){
            $album = "SELECT name, artist, img FROM album WHERE units > 0";
        } else if($cenas=="bought"){
            $album = "SELECT name, artist, img FROM album WHERE name not in (SELECT album_name FROM itemoncart)";
        } else {
            $album = "SELECT name, artist, img FROM album";
        }
    } else {
        $album = "SELECT name, artist, img FROM album";
    }

    $connection=pg_connect($_SESSION['connection']);

    $result = pg_query($connection, $album);
    $result = pg_fetch_all($result);

    //print the albums
    foreach($result as $album1){
        echo "<a href='album.php?name=".$album1['name']."'>";
        echo "<div class='album_individual'>";
        echo "<img src='".$album1['img']."' class='albIMG'>";
        echo "<h3 class='album-name'>".$album1['name']."</h3>";
        echo "<h4 class='album-artist'>".$album1['artist']."</h4>";
        echo "</div>";
        echo "</a>";
    }
?>