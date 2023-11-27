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
            <?php include './scripts/albums.php' ?>
        </div>
        <a class="link-add-album" href="add-album.php">
            <button class="button add-album"> + </button>
        </a>
    </main>
</body>
</html>