<?php
    //get the name, the artist and the image of the album from the database
    $connection = pg_connect($_SESSION['connection']);
    $album = "SELECT name, artist, img FROM album";
    $result = pg_query($connection, $album);
    $result = pg_fetch_all($result);
    
    //print the albums
    foreach($result as $album){
        echo "<a href="album.php" class='album_individual'>";
        echo "<img src='".$album['img']."' class='albIMG'>";
        echo "<h3 class='album-name'>".$album['name']."</h3>";
        echo "<h4 class='album-artist'>".$album['artist']."</h4>";
        echo "</a>";
    }
?>