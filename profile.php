<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/profile.css">
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
            <?php
            if ($_SESSION['isadmin'] == false) {
                print '
                <div class="buttons">
                    <a href="addmoney.php">
                        <button type="button" class="button"> ADD MONEY </button>
                    </a>
                </div>';
                }
            ?>
        </div>
        <div class ="albums">
            <div class="filas">
                <h2 class="texto_tit"> LAST PURCHASES </h2>
                <div class = "filas1">
                    <?php include './scripts/profilelast.php' ?>
                </div>
            </div>
            <div class="filas">
                <h2 class="texto_tit"> FAVORITES </h2>
                <div class = "filas1">
                    <?php include './scripts/profilelast.php' ?>
                </div>
            </div>
        </div>
        <?php
            if ($_SESSION['isadmin'] == false) {
                print '<a href="cart.php" class="card"> <img class="card1" src="imagens/carrinho.svg" width="50px" alt="CARRINHO DE COMPRAS"> </a>';
            }
        ?>
    </main>
</body>