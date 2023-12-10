<!DOCTYPE html>
<html lang = "pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tapes inc</title>
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body>

    <?php include 'cabecalho.php'; ?>

        <main class ="principal">

            <h1 class="texto_tit"> FEATURED </h1>

            <?php
                if ($_SESSION['isadmin'] == true) {
                    print '
                    <form class="buttons">
                        <button class="button" type="submit" value="all" name="submit"> SHOW ALL </button>
                        <button class="button" type="submit" value="stock" name="submit"> IN STOCK </button>
                        <button class="button" type="submit" value="bought" name="submit"> NOT BOUGHT </button>
                    </form>
                    <div class ="albuns">';
                        include'./scripts/stock.php';
                    print '</div>
                    <a class="card" href="add-album.php"> + </a>';
                } else {
                    print '
                    <form class="buttons">
                        <button class="button" type="submit" value="all" name="submit"> SHOW ALL </button>
                        <button class="button" type="submit" value="stock" name="submit"> IN STOCK </button>
                    </form>
                    <div class ="albuns">';
                        include "./scripts/stock.php";
                    print'</div>
                    <a href="cart.php" class="card"> <img class="card1" src="imagens/carrinho.svg" width="50px" alt="CARRINHO DE COMPRAS"> </a>';
                }
            ?>
        </main>


    </body>

</html>