<?php
/**
 * @file personnages.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 08.03.2023
 */
ob_start();
$title = "ValoBlog - Armes";
?>

<head>
    <meta charset="UTF-8">
    <title>Agents de Valorant</title>
    <link rel="stylesheet" href="view/content/assets/css/main.css"/>
</head>
<body>
<header>
    <a href="index.php""><img id="valologo" class="valologo" src="view/content/images/valorant.png"></a>
    <h1 class="titre">Les agents de Valorant</h1>
</header>
<main>
    <h2 class="duellistes" >Les duellistes</h2>

    <div class="hero">
        <div class="Jett">
            <img src="view/content/images/jett.png" id="jett">
        </div>

        <div class="Phoenix">
            <img src="view/content/images/phoenix.png" id="phoenix">

        </div>
        <script>
            var image = document.getElementById("jett");
            image.addEventListener("click", function () {
                window.open("view/personnage/Jett.php"); });

            var image = document.getElementById("phoenix");
            image.addEventListener("click", function () {
                window.open("view/personnage/phoenix.php"); });
        </script>
        <div class="Txt">
            <ul>
                <div class="JettTxt">
                    <strong>
                        <li>Jett</li>
                    </strong>
                </div>
                <div class="phoenixtxt">
                    <strong>
                        <li>Phoenix</li>
                    </strong>
                </div>
            </ul>
        </div>

    </div>


    <h2 class="controleurs">Les initiés</h2>

    <div class="hero">
        <div class="Jett">
            <img src="view/content/images/sova.png" id="sova">
        </div>

        <div class="Phoenix">
            <img src="view/content/images/sage.png" id="sage">
        </div>

        <script>
            var image = document.getElementById("sova");
            image.addEventListener("click", function () {
                window.open("view/personnage/sova.php"); });

            var image = document.getElementById("sage");
            image.addEventListener("click", function () {
                window.open("view/personnage/sage.php"); });
        </script>

        <div class="Txt2">
            <ul>
                <div class="JettTxt">
                    <strong>
                        <li>Sova</li>
                    </strong>
                </div>
                <div class="phoenixtxt">
                    <strong>
                        <li>Sage</li>
                    </strong>
                </div>
            </ul>
        </div>

    </div>

    <h2 class="controleurs">Les sentinelles</h2>

    <div class="hero">
        <div class="Jett">
            <img src="view/content/images/cypher.png" id="cypher">
        </div>

        <div class="Phoenix">
            <img src="view/content/images/Killjoy.png" id="killjoy">
        </div>

        <script>
            var image = document.getElementById("cypher");
            image.addEventListener("click", function () {
                window.open("view/personnage/cypher.php"); });

            var image = document.getElementById("killjoy");
            image.addEventListener("click", function () {
                window.open("view/personnage/killjoy.php"); });
        </script>

        <div class="Txt2">
            <ul>
                <div class="JettTxt">
                    <strong>
                        <li>Cypher</li>
                    </strong>
                </div>
                <div class="phoenixtxt">
                    <strong>
                        <li>Killjoy</li>
                    </strong>
                </div>
            </ul>
        </div>

    </div>

    <h2 class="controleurs">Les contrôleurs</h2>

    <div class="hero">
        <div class="Brimstone">
            <img src="view/content/images/brim.png" id="brimstone">
        </div>

        <script>
            var image = document.getElementById("brimstone");
            image.addEventListener("click", function () {
                window.open("view/personnage/brimstone.php"); });
        </script>

        <div class="Txt2">
            <div class="Brimstonetxt">
                <strong>Brimstone</strong>
            </div>
        </div>
    </div>


