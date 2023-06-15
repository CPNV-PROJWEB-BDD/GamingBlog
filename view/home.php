<html>

<link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title="ValoBlog - Accueil";
?>

<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="view/content/assets/css/main.css" />


</head>
<!-- Header -->
<header id="header">
    <div class="logo">
        <span class="icon fa-gem"></span>
    </div>
    <div class="content">
        <div class="inner">
            <h1>ValoBlog</h1>
            <p>Un site sur le jeu <a href="https://playvalorant.com">Valorant</a> réalisé par<br />
                Matteo Da Cunha, Sacha Volery et Julian Perez </p>
        </div>
    </div>
    <nav>
        <ul>
            <?php if(isset($_SESSION["email"])) :?>
                <li><a href="index.php?action=game">Jeu</a></li>
                <li><a href="index.php?action=characters">Personnages</a></li>
                <li><a href="index.php?action=maps">Cartes</a></li>
                <li><a href="index.php?action=weapons">Armes</a></li>
                <li><a href="index.php?action=logout">Se déconnecter</a></li>
            <?php else :?>
                <li><a href="index.php?action=login">Jeu</a></li>
                <li><a href="index.php?action=login">Personnages</a></li>
                <li><a href="index.php?action=login">Cartes</a></li>
                <li><a href="index.php?action=login">Armes</a></li>
                <li><a href="index.php?action=login">Se Connecter</a></li>
                <?php endif?>

            <!--<li><a href="#elements">Elements</a></li>-->
        </ul>
    </nav>
</header>

<footer id="footer">
    <p class="copyright">&copy; ValoBlog. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
</footer>

</div>

</body>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
</html>