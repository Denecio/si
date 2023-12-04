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

            <div class ="albuns">
                <?php include './scripts/albums.php' ?>
            </div>

            <img class="card" src="imagens/carrinho.svg" width="50px" alt="CARRINHO DE COMPRAS">

        </main>


    </body>

</html>