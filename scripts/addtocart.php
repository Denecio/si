<?php
    session_start();
    $connection = pg_connect($_SESSION['connection']);
    if(isset($_POST["album_name"])){
        $album_name = $_POST["album_name"];
    }

    $compra = "SELECT id FROM purchase WHERE temp=true AND client_utilizador_username = '".$_SESSION['username']."'";
    $compra1 = pg_query($connection, $compra);
    $compra1 = pg_fetch_array($compra1);


    //caso já exista uma compra relacionada com aquele user
    if($compra1){
        $compra2 = "SELECT quantity FROM itemoncart WHERE purchase_id = ".$compra1['id']." AND album_name='".$album_name."'";
        print $compra2;
        $compra2 = pg_query($connection, $compra2);
        $compra2 = pg_fetch_array($compra2);
        if($compra2){ //caso o album já esteja no carrinho
            print $compra2['quantity'];
            $editar_quantidade = "UPDATE itemoncart SET quantity = ".($compra2['quantity']+1)." WHERE album_name = '$album_name'";
            $editar = pg_query($connection, $editar_quantidade);
            print $editar_quantidade;
        }
        else { //caso o album não esteja no carrinho
            $result1 = "INSERT INTO itemoncart (album_name,purchase_id,quantity) VALUES ('".$album_name. "'," .$compra1['id']. ",". 1 . ")";
            $resultado = pg_query($connection,$result1);
            print $album_name;
        }
    }

    //caso não exista a compra
    else{

        $result2 = "INSERT INTO purchase (total,temp,client_utilizador_username) VALUES (0 , true , '".$_SESSION['username']."')";
        $resultado2 = pg_query($connection,$result2);

        $compra1 = pg_query($connection, $compra);
        $compra1 = pg_fetch_array($compra1);

        $result1 = "INSERT INTO itemoncart (album_name,purchase_id,quantity) VALUES ('".$album_name. "'," .$compra1['id']. ",". 1 . ")";
        $resultado = pg_query($connection,$result1);
    }

    $preco = "SELECT price FROM album WHERE name= '$album_name'";
    $preco1 = pg_query($connection,$preco);
    $preco1 = pg_fetch_array($preco1);
    $preco_update = "UPDATE purchase SET total = total + ".  $preco1['price']." WHERE id = ".$compra1['id'];;
    $preco_update1 = pg_query($connection, $preco_update);

    header("Location: ../album.php?name=".$album_name);
?>