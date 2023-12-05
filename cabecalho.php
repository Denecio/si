<?php
    session_start();
    if($_SESSION["username"] === ""){
        header("Location: login.php");
    }
    $username = $_SESSION["username"];
?>

<header class="cabecalho">

    <a href="index.php" class="logo"> TAPES INC </a>
    <ul class="menu">
        <?php
            if($_SESSION['isadmin'] == true){
                echo '<li> <a href="albums.php" class="botao"> ALBUMS </a> </li>
                <li> <a href="stats.php" class="botao"> STATS </a> </li>';
            } else {
                echo '<li> <a href="search.php" class="botao"> SEARCH </a> </li>';
            }
        ?>
    </ul>

    <div class="profile">
       <a href="profile.php" > <p> <?php echo $username ?> </p> </a>
       <a href="profile.php" class="linkprofile"> <img class="profilepic" src ="imagens/imag.jpg" alt="profile picture"> </a>
    </div>

</header>