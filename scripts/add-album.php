<?php
    session_start();
    $connection = pg_connect($_SESSION['connection']);  
    //get the data from the form
    $name = $_POST['name'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $units = $_POST['units'];
    $img = $_FILES['img'];
    $imageData = "../uploads/".$img['name'];
    //print "<img src='data:image/png;base64," . base64_encode($imageData) . "'>"; very important piece of code to use in the future

    move_uploaded_file($img["tmp_name"], $imageData);

    //send the data to the database
    $newAlbum = "INSERT INTO album (name, artist, genre, release_date, price, units, img, admin_utilizador_username) VALUES ('".$name."', '".$artist."', '".$genre."', '".$year."', ".$price.", ".$units.", '".$imageData."' , '".$_SESSION['username']."')";
    $result = pg_query($connection, $newAlbum);
    if($result){
        header("Location: ../albums.php");
    }
    else{
        echo "Something went wrong";
    }
?>