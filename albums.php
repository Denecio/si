<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/myalbums.css">
</head>

<body>
    <?php include 'cabecalho.php'; ?>
    <main class ="principal">
        <div class="buttons">
            <button class="button"> IN STOCK </button>
            <button class="button"> NOT BOUGHT </button>
        </div>

        <div class ="albuns">
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
            <div class = "album_individual">
                <img class="albIMG" src ="imagens/volume2.jpeg" alt="Zuccenberg">
                <h3> Zeccenberg </h3>
                <h4> Tommy Cash </h4>
            </div>
            <div class = "album_individual">
                <img class="albIMG" src ="imagens/volume2.jpeg" alt="Is This It">
                <h3> Is This It </h3>
                <h4> The Strokes </h4>
            </div>
        </div>
        <a class="link-add-album" href="add-album.php">
            <button class="button add-album"> + </button>
        </a>
    </main>
</body>
</html>