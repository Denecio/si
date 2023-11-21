<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        exit();
    }
    $username = $_SESSION["username"];

?>

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

    <div class="cab_profile">
        <div class="profile1">
            <a href="profile.php"> <img src ="" alt="profile picture"> </a>
            <p> <?php echo $username; ?></p>
        </div>

        <div class="botoes">
            <button type="button" > ADD MONEY </button>
            <button type="button" > SHOW ALL ALBUNS </button>
        </div>
    </div>
    <div class ="albuns">
        <div class="last">
            <h2> LAST PURCHASES </h2>
            <div class = "al">
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
            </div>
        </div>
        <div class="favorites">
            <h2> FAVORITES </h2>
            <div class = "al">
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
            </div>
        </div>
    </div>
</body>