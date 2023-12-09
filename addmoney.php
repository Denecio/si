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

        <div class="buttons">
            <a href="addmoney.php">
                <button type="button" class="button" id="button_add"> ADD MONEY </button>
            </a>
            <a href="myalbums.php">
                <button type="button" class="button"> SHOW ALL ALBUNS </button>
            </a>
        </div>
    </div>

    <div class="money">

        <h1 class="texto_tit"> QUANTITY </h1>
            <?php print "<form action='scripts/balance.php' method='post' class='pagamento'>" ; ?>
            <input type="text" name="balance" class="pay" id="quantidade" placeholder="Quantity...">
            <button value="addmoney" name="addmoney" type="submit" class="button"> ADD </button>
        </form>
    </div>

</main>
</body>