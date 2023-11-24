<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/addmoney.css">
</head>

<body>

<?php include 'cabecalho.php'; ?>
<main class="principal">
    <div class="cab-profile">
        <div class="user-info">
            <img src ="imagens/imag.jpg" alt="profile picture" class="profile-pic">
            <p class="username"> <?php echo $username; ?></p>
            <form action="./scripts/logout.php">
                <button type="submit" class="button"> LOG OUT </button>
            </form>
        </div>

        <div class="botoes">
            <a href="addmoney.php">
                <button type="button" class="button"> ADD MONEY </button>
            </a>
            <a href="myalbums.php">
                <button type="button" class="button"> SHOW ALL ALBUNS </button>
            </a>
        </div>
    </div>

    <div class="money">
        <div class="quantidade">
            <h1 class="texto_tit"> QUANTITY </h1>
            <input type="text" class="pay" id="quantidade" placeholder="Quantity...">
            <p id="max_dinero" class="subtexto"> Máx: 200€ </p>
        </div>
        <div class="pagamento">
            <h1 class="texto_tit"> PAYMENT METHOD </h1>
            <div class="opcao">
                <p class="tit_opcao"> MB WAY</p>
                <input type="number" id="nrmobile" placeholder="XXX XXX XXX" class="pay1">
            </div>
            <div class="opcao">
                <p class="tit_opcao"> CREDIT CARD</p>
                <form  class="credit_card_form">
                    <label class="subtexto"> Card Number
                        <input type="number" name="cardnumber" placeholder="XXXX XXXX XXXX XXXX" class="pay1" id="number">
                    </label>
                    <label class="subtexto"> Expiration Date
                        <input type="date" name="date" placeholder="DD/MM/YYYY" class="pay1" id="expiration">
                    </label>
                    <label class="subtexto"> Code
                        <input type="number" name="code" placeholder="XXX" class="pay1" id="code">
                    </label>
                    <button type="submit" class="button"> CONCLUDE </button>
                </form>
            </div>
        </div>
    </div>

</main>
</body>