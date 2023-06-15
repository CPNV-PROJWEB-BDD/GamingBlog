<?php
?>
<link rel="stylesheet" href="content/assets/css/menu.css">

<div class="contentArea">

    <div class="divPanel notop page-content">
        <div class="row-fluid">

            <?php if(isset($_SESSION["email"])) : ?>
                <div class="container">
                    <div class="text">
                        Connecté en tant que : <?= $_SESSION["email"] ?>
                    </div>
                </div>

                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?action=game">Jeu</a></li>
                        <li><a href="index.php?action=characters">Personnages</a></li>
                        <li><a href="index.php?action=maps">Cartes</a></li>
                        <li><a href="index.php?action=weapons">Armes</a></li>
                        <li><a href="index.php?action=weapons">Armes</a></li>
                    </ul>
                </nav>
            <?php endif?>

            <!--__________CONTENU__________-->

            <div class="span12" id="divMain">
                <?=$content; ?>
            </div>

            <!--________FIN CONTENU________-->

        </div>

        <div id="footerInnerSeparator"></div>
    </div>
</div>

