<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/buy.css">
</head>

<body>

    <?php include 'cabecalho.php'; ?>
    <main class="principal">
        <div class="cab-profile">
            <div class="user-info">
                <img src ="imagens/imag.jpg" alt="profile picture" class="profile-pic">
                <p class="username"> <?php echo $username; ?></p>
            </div>

            <div class="botoes">
                <button type="button" class="profile-button"> ADD MONEY </button>
                <a href="myalbums.php">
                    <button type="button" class="profile-button"> SHOW ALL ALBUNS </button>
                </a>
            </div>
        </div>
        <div class ="albums">
            <div class="filas">
                <h2> LAST PURCHASES </h2>
                <div class = "filas1">
                    <div class = "album_individual">
                        <img class="albIMG" src ="imagens/volume2.jpeg" alt="Goblin">
                        <h3> Goblin </h3>
                        <h4> Tyler, The Creator </h4>
                    </div>
                    <div class = "album_individual">
                        <img class="albIMG" src ="imagens/volume2.jpeg" alt="Estava No Abismo Mas Dei Um Passo Em Frente">
                        <h3> Estava No Abismo Mas Dei Um Passo Em Frente </h3>
                        <h4> Pedro Mafama </h4>
                    </div>
                    <div class = "album_individual">
                        <img class="albIMG" src ="imagens/volume2.jpeg" alt="Melodic Blue">
                        <h3> Melocdic Blue </h3>
                        <h4> Baby Keem </h4>
                    </div>
                    <div class = "album_individual">
                        <img class="albIMG" src ="imagens/volume2.jpeg" alt="Volume 2">
                        <h3> Volume 2 </h3>
                        <h4> José Pinhal </h4>
                    </div>
                    <div class = "album_individual">
                        <img class="albIMG" src ="imagens/volume2.jpeg" alt="Back in action">
                        <h3> Back in action </h3>
                        <h4> midwxst </h4>
                    </div>
                </div>
            </div>
            <div class="filas">
                <h2> FAVORITES </h2>
                <div class = "filas1">
                    <div class = "album_individual">
                        <img class="albIMG" src ="imagens/volume2.jpeg" alt="Goblin">
                        <h3> Goblin </h3>
                        <h4> Tyler, The Creator </h4>
                    </div>
                    <div class = "album_individual">
                        <img class="albIMG" src ="imagens/volume2.jpeg" alt="Estava No Abismo Mas Dei Um Passo Em Frente">
                        <h3> Estava No Abismo Mas Dei Um Passo Em Frente </h3>
                        <h4> Pedro Mafama </h4>
                    </div>
                    <div class = "album_individual">
                        <img class="albIMG" src ="imagens/volume2.jpeg" alt="Melodic Blue">
                        <h3> Melocdic Blue </h3>
                        <h4> Baby Keem </h4>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>