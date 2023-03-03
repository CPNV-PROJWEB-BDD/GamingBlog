<?php
?>
<!DOCTYPE HTML>
<html>
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
            <li><a href="view/content/jeu.html">Jeu</a></li>
            <li><a href="view/content/personnages.html">Personnages</a></li>
            <li><a href="view/content/cartes.html">Cartes</a></li>
            <li><a href="view/content/armes.html">Armes</a></li>
            <li><a href="view/login/login.html">Se Connecter</a></li>
            <!--<li><a href="#elements">Elements</a></li>-->
        </ul>
    </nav>
</header>

<div class="contentArea">

    <div class="divPanel notop page-content">
        <div class="row-fluid">

            <!--__________CONTENU__________-->

            <div class="span12" id="divMain">
                <?=$content; ?>
            </div>

            <!--________FIN CONTENU________-->

        </div>

        <div id="footerInnerSeparator"></div>
    </div>
</div>

<!-- Footer -->
<footer id="footer">
    <p class="copyright">&copy; ValoBlog. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
</footer>

</div>

</body>
</html>