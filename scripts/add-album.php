<?php
    session_start();
    $connection = pg_connect($_SESSION['connection']);  

    if (!isset($_GET["name"])){
        $name = $_POST['name'];
        $artist = $_POST['artist'];
        $genre = $_POST['genre'];
        $year = $_POST['year'];
        $price = $_POST['price'];
        $units = $_POST['units'];
        $img = $_FILES['img'];
        $imageData = "../uploads/".$img['name'];

        move_uploaded_file($img["tmp_name"], $imageData);

        $newAlbum = "INSERT INTO album (name, artist, genre, release_date, price, units, img, admin_utilizador_username) VALUES ('".$name."', '".$artist."', '".$genre."', '".$year."', ".$price.", ".$units.", '".$imageData."' , '".$_SESSION['username']."')";
        $result = pg_query($connection, $newAlbum);
        $newPrice = "INSERT INTO previousprice (album_name, price, day) VALUES ('".$name."', ".$price.", '".date("Y-m-d")."')";
        $result = pg_query($connection, $newPrice);

        if($result){
            header("Location: ../albums.php");
        }
        else{
            echo "Something went wrong";
        }
    } else {
        $namelink = $_GET["name"];

        $price = $_POST['price'];
        $img = $_FILES['img'];
        $imageData = "../uploads/".$img['name'];

        move_uploaded_file($img["tmp_name"], $imageData);

        if ($_POST['price']!="" && $imageData!="../uploads/"){
            $editAlbum = "UPDATE album SET price ='". $price."', img = '".$imageData."' WHERE name = '".$namelink."'";
            $editPrice = "INSERT INTO previousprice (album_name, price, day) VALUES ('".$namelink."', ".$price.", '".date("Y-m-d")."')";
        } else if ($_POST['price']!=""){
            $editAlbum = "UPDATE album SET price ='". $price."' WHERE name = '".$namelink."'";
            $editPrice = "INSERT INTO previousprice (album_name, price, day) VALUES ('".$namelink."', ".$price.", '".date("Y-m-d")."')";
        } else if ($imageData!="../uploads/"){
            $editAlbum = "UPDATE album SET img = '".$imageData."' WHERE name = '".$namelink."'";
        } else {
            header("Location: ../album.php?name=".$namelink);
        }
        print $editAlbum;
        if (isset($editAlbum)){
            $result = pg_query($connection, $editAlbum);
            if(isset($editPrice)){
                $result = pg_query($connection, $editPrice);
            }
            if($result){
                header("Location: ../album.php?name=".$namelink);
            }
            else{
                echo "Something went wrong";
            }
        }
    }
?>