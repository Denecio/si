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

        <div class="produto">
            <div class="capa">
                <img class="albumIMG" src ="imagens/volume2.jpeg" alt="Volume 2">
                <div>
                    <h3> Volume 2 </h3>
                    <h4> José Pinhal </h4>
                </div>
            </div>
            <div class="info_album">
                <div class="det_produtos">
                    <h3> Product’s Description </h3>
                    <p>
                        Album - Goblin <br>
                        Artist - Tyler, The Creator <br>
                        Release date - May 10, 2011
                    </p>
                </div>
                <div class="preco">
                    <h3> Price </h3>
                    <p>
                        34,99€
                    </p>
                </div>
            </div>
        </div>

        <div class="checkout">
            <div class="out">
                <div>
                    <h2> Checkout </h2>
                    <p class="checkout_tit"> Product(s) - 1 </p>
                </div>

                <div class = "descricao">
                    <img class="albumIMG1" src ="imagens/volume2.jpeg" alt="Volume 2">
                    <div>
                        <h3> Volume 2 </h3>
                        <h4> José Pinhal </h4>
                        <p> 34,99€ </p>
                    </div>
                </div>
            </div>
            <div class="shipping">
                <h2> Shipping </h2>
                <div id="continente">
                    <p> Europe </p>
                    <p> 2,49€</p>
                </div>
                <div id="buttons">
                    <button class="button_ship"> Express </button>
                    <button class="button_ship"> Normal </button>
                </div>
            </div>

            <div class="total">
                <div>
                    <h2> Total </h2>
                    <p> 37,99 </p>
                </div>
                <button type="button" class="button"> Pay </button>
            </div>


        </div>
    </div>

</main>


</body>

</html>