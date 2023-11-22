<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        exit();
    }
    $username = $_SESSION["username"];

?>

<header class="cabecalho">

    <a href="index.php" class="logo"> TAPES INC </a>
    <ul class="menu">
       <li> <a href="myalbums.php" class="botao"> MY ALBUMS </a> </li>
       <li> <a href="buy.php" class="botao"> BUY </a> </li>
       <li> <a href="search.php" class="botao"> SEARCH </a> </li>
    </ul>

    <div class="profile">
       <a href="profile.php" > <p> <?php echo $username ?> </p> </a>
       <a href="profile.php" class="linkprofile"> <img class="profilepic" src ="imagens/imag.jpg" alt="profile picture"> </a>
    </div>

</header>