<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>

<?php include 'cabecalho.php'; ?>

<main class ="principal">

    <h1 class="texto_tit"> MY CART </h1>

    <div class="cart">
        <?php

        $connection = pg_connect($_SESSION['connection']);

        $compra = "SELECT total, id FROM purchase WHERE temp=true AND client_utilizador_username = '".$_SESSION['username']."'";
        $compra1 = pg_query($connection,$compra);
        $compra1 = pg_fetch_array($compra1);

        $putaquery = "SELECT album.*, quantity FROM album, itemoncart WHERE name=album_name AND purchase_id=( SELECT id FROM purchase WHERE temp=true AND client_utilizador_username = '".$_SESSION['username']."')";
        $receber = pg_query($connection, $putaquery);
        $receber = pg_fetch_all($receber);

            //name, units, price, artist, genre, admin_utilizador_username, release_date, img (link), quantity (Quantidade do album no carrinho)
        if(!isset($compra1['id'])) {

            print "<div class='noitem'>
                <p> NO ITEMS ON YOUR CART </p>
                <a href='index.php'>
                    <button type='button' class='button'> EXPLORE ALBUNS </button>
                </a>
            </div>";

        }

        else{
            print "<div class='produtos'>";
            foreach ($receber as $item) {
                print "<div class='produto'>
                        <div class='capa'>
                            <img class='albumIMG' src =" . $item['img'] . " alt=" . $item['name'] . ">
                            <div>
                                <h3>" . $item['name'] . "</h3>
                                <h4> " . $item['artist'] . " </h4>
                            </div>
                        </div>
                        <div class='info_album'>
                            <div class='det_produtos'>
                                <h3> Product’s Description </h3>
                                <p>
                                    Album - " . $item['name'] . " <br>
                                    Artist - " . $item['artist'] . " <br>
                                    Release date - " . $item['release_date'] . " <br>
                                    Units in Stock - " . $item['units'] . "
                                </p>
                            </div>
                            <div class='preco'>
                                <h3> Price </h3>
                                <p>
                                    " . $item['price'] . " € x " . $item['quantity'] . " unit
                                </p>
                            </div>
                        </div>
                    </div>";
                    }
            print "</div>";

            print"<div class='total'>
                 <h3> Total ".$compra1['total']." € </h3>        
                 <form action='scripts/cart.php?id=".$compra1['id']."&total=".$compra1['total']."'method='post'>
                    <input type='hidden' name='pay' value='".$compra1['id']."'>
                    <button value='add' name='add' type='submit' class='button'> Pay </button>
                 </form>
                 </div>
                            ";
        }
        ?>

    </div>

</main>


</body>

</html>