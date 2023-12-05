<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/search.css">
</head>

<body>

<?php include 'cabecalho.php'; ?>

<main class ="principal">

    <div class="pesquisa">

        <h1 class="texto_tit"> ALL ALBUMS AVAILABLE </h1>

        <form method="post" id="form">
            <input type="search" id="search" name="search" placeholder="Search...">
            <button type="submit" value="search" name="submit"> <img src="imagens/lupa.svg" alt="lupa"> </button>
        </form>

    </div>

    <div class ="albuns">
        <?php include './scripts/procura.php' ?>
    </div>

    <a href="cart.php" class="card"> <img class="card1" src="imagens/carrinho.svg" width="50px" alt="CARRINHO DE COMPRAS"> </a>

</main>


</body>

</html>