<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- This is for mobile -->
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/add-album.css">
</head>

<body>
    <?php include 'cabecalho.php'; ?>
    <main class ="principal">
        <h1 class="add-album-title"> ALBUM INFO </h1>
        <form action=<?php if(!isset($_GET['name'])){
            print "./scripts/add-album.php";} else {print "'./scripts/add-album.php?name=".$_GET["name"]."'";
            }?> method="post" class="add-album-form" enctype="multipart/form-data" >
            <div class="add-album-info add-album-image">
                <div for="img" class="file-label button" id="fileName" type>Change Photo</div>
                <input type="file" name="img" placeholder="Image" class="add-album-input add-album-image-input" accept="image/*">
            </div>
            <div class="add-album-data">
                <?php
                if(!isset($_GET['name'])){
                    print
                        '<label for="name" class="add-album-info"> Name
                            <input type="text" name="name" placeholder="Name" class="add-album-input">
                        </label>
                        <label for="artist" class="add-album-info"> Artist
                            <input type="text" name="artist" placeholder="Artist" class="add-album-input">
                        </label>
                        <label for="genre" class="add-album-info"> Genre
                            <input type="text" name="genre" placeholder="Genre" class="add-album-input">
                        </label>
                        <label for="year" class="add-album-info"> Released Date
                            <input type="date" name="year" placeholder="Year" class="add-album-input">
                        </label>
                        <label for="price" class="add-album-info"> Price
                            <input type="number" name="price" placeholder="Price" class="add-album-input">
                        </label>
                        <label for="Units" class="add-album-info"> Units
                            <input type="number" name="units" placeholder="Units" class="add-album-input">
                        </label>

                        <button type="submit" class="button add-album-button"> CONFIRM </button>';
                } else {
                    print
                        '<label for="price" class="add-album-info"> Price
                            <input type="number" name="price" placeholder="Price" class="add-album-input">
                        </label>
                        <button type="submit" class="button add-album-button"> CONFIRM </button>';
                }
                ?>
            </div>
        </form>
    </main>
    <script src="scripts/image.js"></script>
</body>
</html>