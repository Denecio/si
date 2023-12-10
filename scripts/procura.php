<?php
//get the name, the artist and the image of the album from the database
$connection = pg_connect($_SESSION['connection']);

if (!isset($_POST['search']) && !isset($_POST['opcoes'])) {
    $album = "SELECT name, artist, img FROM album";
} else if (!isset($_POST['search']) && isset($_POST['opcoes'])){
    $option = $_POST['opcoes'];
    if($option=="alfabeto"){
        $order = "name ASC";
    }
    if($option=="lowest"){
        $order = "price ASC";
    }
    if($option=="highest"){
        $order = "price DESC";
    }
    if($option=="newest"){
        $order = "release_date ASC";
    }
    if($option=="oldest"){
        $order = "release_date DESC";
    }

    $album = "SELECT name, artist, img FROM album ORDER BY " .$order;
} else if (isset($_POST['search']) && !isset($_POST['opcoes'])){
    $input = $_POST['search'];
    $album = "SELECT name, artist, img FROM album WHERE name LIKE '%$input' OR name LIKE '%$input%' OR name LIKE '$input%' OR artist LIKE '%$input' OR artist LIKE '%$input%' OR artist LIKE '$input%'" ;
} else{
    $input = $_POST['search'];
    $option = $_POST['opcoes'];
    if($option=="alfabeto"){
        $order = "name ASC";
    }
    if($option=="lowest"){
        $order = "price ASC";
    }
    if($option=="highest"){
        $order = "price DESC";
    }
    if($option=="newest"){
        $order = "release_date ASC";
    }
    if($option=="oldest"){
        $order = "release_date DESC";
    }

    $album = "SELECT name, artist, img FROM album WHERE name LIKE '%$input' OR name LIKE '%$input%' OR name LIKE '$input%' OR artist LIKE '%$input' OR artist LIKE '%$input%' OR artist LIKE '$input%' ORDER BY " .$order ;
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