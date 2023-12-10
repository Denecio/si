<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/addtocart.css">
</head>

<body>
<?php include 'cabecalho.php'; ?>
<?php include 'scripts/album.php'; ?>
<main class ="principal" id="principal1">

    <div class="capa">
        <img class="albumIMG" src ="<?php print $img ?>" alt="Volume2">
        <h3> <?php print $name ?> </h3>
        <h4> <?php print $artist ?> </h4>
    </div>

    <div class="info_album">
        <p class="details">
            Album - <?php print $name ?> <br>
            Artist - <?php print $artist ?> <br>
            Release Date - <?php print $release_date ?> <br>
            Units in Stock - <?php print $units ?> <br>
        </p>

        <p class="preco" ><?php print $price ?>€ </p>
        
        <?php
        if($_SESSION["isadmin"])
        print
        "<div class='previous-prices'>
            <p class='popup'>Check previous prices <b class='dropdown'>V</b> </p>
            <div class='popup-content popup-content-disabled'>
                $previousPrices
            </div>
        </div>
        <a href='add-album.php?name=$name'>
            <button class='button'> EDIT ALBUM</button>
        </a>"
        ?>

        <?php print "<form action='scripts/addtocart.php?name=".$name."'method='post'>"; ?>
            <input type="hidden" name="album_name" value="<?php echo $name; ?>">
            <button value="add" name="add" type="submit" class="add_card">Add To Cart</button>
        </form>
    </div>
    <a href="cart.php" class="card"> <img class="card1" src="imagens/carrinho.svg" width="50px" alt="CARRINHO DE COMPRAS"> </a>

    <script src="scripts/popup.js"></script>
</main>


</body>

</html>