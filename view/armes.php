<link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
<?php
/**
 * @file armes.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 08.03.2023
 */
ob_start();
$title="ValoBlog - Armes";
?>
    <head>
        <title>Les armes de Valorant</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="view/content/assets/css/main.css" />
    </head>
    <body>
    <header>
        <img id="valologo" class="valologo" src="view/content/images/valorant.png">
        <h1 class="titrevalo">Les armes de Valorant</h1>
    </header>
    <main>
        <h2 class="pistolet">Les pistolets</h2>
        <div >
            <img src="view/content/images/classic.png" id="classic" class="classic">
        </div>

        <div>
            <img src="view/content/images/ghost.png" id="ghost" class="ghost">
        </div>

        <script>
            // On récupère l'élément image et on lui ajoute un écouteur d'événements au clic
            var image = document.getElementById("classic");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/classic.php");
            });

            var image = document.getElementById("ghost");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/ghost.php");
            });
        </script>


        <h2 class="assaut">Les fusils d'assaut</h2>

        <div>
            <img src="view/content/images/valorant-vandal-profile-icon.png" id="vandal" class="vandal">
        </div>

        <div>
            <img src="view/content/images/phantom.png" id="phantom" class="phantom">
        </div>

        <script>
            // On récupère l'élément image et on lui ajoute un écouteur d'événements au clic
            var image = document.getElementById("vandal");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/vandal.php");
            });

            var image = document.getElementById("phantom");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/phantom.php");
            });
        </script>
        <h2 class="pompe">Les fusils à pompe</h2>

        <div>
            <img src="view/content/images/bucky.png" id="bucky" class="bucky">
        </div>

        <div>
            <img src="view/content/images/judge.png" id="judge" class="judge">
        </div>

        <div>
            <img src="view/content/images/shorty.png" id="shorty" class="shorty">
        </div>

        <script>
            // On récupère l'élément image et on lui ajoute un écouteur d'événements au clic
            var image = document.getElementById("bucky");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/bucky.php");
            });

            var image = document.getElementById("judge");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/judge.php");
            });

            var image = document.getElementById("shorty");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/shorty.php");
            });
        </script>

        <h2 class="mitraillette">Les mitraillettes</h2>

        <div>
            <img src="view/content/images/stinger.png" id="stinger" class="stinger">
        </div>

        <div>
            <img src="view/content/images/spectre.png" id="spectre" class="spectre">
        </div>

        <script>
            // On récupère l'élément image et on lui ajoute un écouteur d'événements au clic
            var image = document.getElementById("stinger");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/stinger.php");
            });

            var image = document.getElementById("spectre");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/spectre.php");
            });
        </script>

        <h2 class="sniper">Les fusils de précision</h2>

        <div>
            <img src="view/content/images/marshal.png" id="marshal" class="marshal">
        </div>

        <div>
            <img src="view/content/images/operator.png" id="operator" class="operator">
        </div>

        <script>
            // On récupère l'élément image et on lui ajoute un écouteur d'événements au clic
            var image = document.getElementById("marshal");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/marshal.php");
            });

            var image = document.getElementById("operator");
            image.addEventListener("click", function() {
                // On ouvre une nouvelle page avec l'URL souhaitée
                window.open("view/armes/operator.php");
            });
        </script>


    </main>
    </body>
<?php
$content = ob_get_clean();
require "gabarit.php";
 
