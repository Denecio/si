<?php
//get the name, the artist and the image of the album from the database
$connection = pg_connect($_SESSION['connection']);

if (!isset($_POST['search'])) {
    $album = "SELECT name, artist, img FROM album";
} else {
    $input = $_POST['search'];
    $album = "SELECT name, artist, img FROM album WHERE name = '$input'";
}

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