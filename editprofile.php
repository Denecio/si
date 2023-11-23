<?php
    $connection = $_SESSION["connection"];

    $connection = pg_connect($connection);

    $getpassemail = 'SELECT * FROM utilizador, client WHERE username = '. "'".$username."' AND utilizador_username = username";

    $query = pg_query($connection, $getpassemail);
    $userinfo = pg_fetch_all($query);

    foreach($userinfo as $value){
        $email = $value['email'];
        $nif = $value['nif'];
        $saldo = $value['balance'];
        $password = $value['password'];
        print ' '.$email.' '.$nif.' '.$saldo.' '.$password;
    }
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

<main class ="principal">

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
            <div class = "last_al">
                <div class = "album_individual">
                    <img src ="" alt="Goblin">
                    <h3> Goblin </h3>
                    <h4> Tyler, The Creator </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Estava No Abismo Mas Dei Um Passo Em Frente">
                    <h3> Estava No Abismo Mas Dei Um Passo Em Frente </h3>
                    <h4> Pedro Mafama </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Melodic Blue">
                    <h3> Melocdic Blue </h3>
                    <h4> Baby Keem </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Volume 2">
                    <h3> Volume 2 </h3>
                    <h4> José Pinhal </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Back in action">
                    <h3> Back in action </h3>
                    <h4> midwxst </h4>
                </div>
            </div>
        </div>

        <div class="favorites">

            <h2> FAVORITES </h2>
            <div class = "favorites_al">
                <div class = "album_individual">
                    <img src ="" alt="SATURATION II">
                    <h3> SATURATION II </h3>
                    <h4> BROCKHAMPTON </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="YHLQMDNLG">
                    <h3> YHLQMDNLG </h3>
                    <h4> Bad Bunny </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="La revancha del tango">
                    <h3> La revancha del tango </h3>
                    <h4> Gotan Project </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="Everything you have come to expect">
                    <h3> Everything you have come to expect </h3>
                    <h4> The Last Shadow Puppets </h4>
                </div>
                <div class = "album_individual">
                    <img src ="" alt="¥€$">
                    <h3> ¥€$ </h3>
                    <h4> Tommy Cash  </h4>
                </div>
            </div>
        </div>

    </div>

    <img src="" alt="CARRINHO DE COMPRAS">

</main>


</body>

</html>