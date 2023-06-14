<?php
?>
<link rel="stylesheet" href="content/assets/css/icon_login.css">

<div class="contentArea">

    <div class="divPanel notop page-content">
        <div class="row-fluid">

            <?php if(isset($_SESSION["email"])) : ?>
                <div class="container">
                    <div class="text">
                        Connecté en tant que : <?= $_SESSION["email"] ?>
                    </div>
                </div>
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

