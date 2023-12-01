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
        </p>

        <p class="preco" ><?php print $price ?>€ </p>
        
        <div class="previous-prices">
            <p class="popup">Check previous prices <b class="dropdown">V</b> </p>
            <div class="popup-content popup-content-disabled">
                <p> <?php print $price ?>€ </p>
                <p> <?php print $price ?>€ </p>
                <p> <?php print $price ?>€ </p>
            </div>
        </div>
    </div>
    <script src="scripts/popup.js"></script>
</main>


</body>

</html>