<link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
<?php
/**
 * @file cartes.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 08.03.2023
 */
ob_start();
$title="ValoBlog - Armes";
?>

    <head>
        <title>Les Cartes de Valorant</title>
    </head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/content/assets/css/main.css">
    <body>
    <h1>Les Cartes Valorant</h1>
    <ul>
        <li>
            <h2>Bind</h2>
                <img class="carteimg" src="view/content/images/Bind.png" alt="Image de la carte Bind">
            <p>Cette carte est une carte de type "Défense/Attaque" se déroulant dans une ville marocaine traditionnelle avec des
                thèmes de mosaïques et de tapisseries. Les joueurs doivent naviguer à travers des ruelles étroites et des cours intérieures pour
                atteindre les sites de bombe, tout en évitant les pièges et les obstacles qui se dressent sur leur chemin.</p>
        </li>
        <li>
            <h2>Haven</h2>
            <img class="carteimg" src="view/content/images/Haven.png" alt="Image de la carte Haven">
            <p>Cette carte est une carte de type "Défense/Attaque" se déroulant dans une ville portuaire avec des thèmes de pierre et de béton.
                Les joueurs commencent dans des zones de spawn opposées et doivent se déplacer vers les sites de bombe situés dans la ville. La carte offre
                une variété de couloirs et de zones ouvertes, ce qui permet aux joueurs d'adopter différentes stratégies en fonction de leur style de jeu.</p>
        </li>
        <li>
            <h2>Split</h2>
            <img class="carteimg" src="view/content/images/Split.png" alt="Image de la carte Split">
            <p>Cette carte est une carte de type "Défense/Attaque" se déroulant dans un environnement urbain moderne avec des thèmes de métal et de verre.
                Les joueurs doivent naviguer à travers des rues et des couloirs étroits pour atteindre les sites de bombe, tout en évitant les angles morts
                et les pièges qui se dressent sur leur chemin.</p>
        </li>
        <li>
            <h2>Ascent</h2>
            <img class="carteimg" src="view/content/images/Ascent.png" alt="Image de la carte Ascent">
            <p>Cette carte est une carte de type "Défense/Attaque" se déroulant dans une ville méditerranéenne avec des thèmes de marbre et de verre.
                Les joueurs commencent dans des zones de spawn opposées et doivent se déplacer vers les sites de bombe situés dans les bâtiments de la ville.
                La carte offre des chemins multiples et des angles d'attaque variés, permettant aux joueurs de mettre en place des stratégies complexes pour
                prendre le dessus sur leurs adversaires.</p>
        </li>
        <li>
            <h2>Icebox</h2>
            <img class="carteimg" src="view/content/images/Icebox.png" alt="Image de la carte Icebox">
            <p>Cette carte est une carte de type "Défense/Attaque" se déroulant dans un environnement arctique avec des thèmes de glace et de neige.
                Les joueurs doivent naviguer à travers des zones de cargo et des plateformes pour atteindre les sites de bombe, tout en évitant les obstacles
                naturels tels que les falaises de glace et les stalactites. La carte offre des espaces ouverts et des couloirs étroits, ce qui permet aux joueurs
                de jouer avec différents styles et de s'adapter aux situations.</p>
        </li>
        <li>
            <h2>Breeze</h2>
            <img class="carteimg" src="view/content/images/Breeze.png" alt="Image de la carte Breeze">
            <p>Cette carte est une carte de type "Défense/Attaque" se déroulant dans un environnement tropical avec des thèmes de plage et de jungle.
                Les joueurs commencent dans des zones de spawn opposées et doivent se déplacer vers les sites de bombe situés dans des bâtiments de style colonial.
                La carte offre une variété d'angles d'attaque et de cachettes, permettant aux joueurs de mettre en place des stratégies créatives pour prendre
                l'avantage sur leurs adversaires.</p>
        </li>
        <li>
            <h2>Pearl</h2>
            <img class="carteimg" src="view/content/images/Pearl.png" alt="Image de la carte Pearl">
            <p>Cette carte est une carte de type "Démolition" se déroulant sur une île exotique avec des thèmes de jungle et de plage. Les joueurs commencent
                dans une zone de spawn centrale et doivent se déplacer vers des sites de bombe situés de part et d'autre de la carte. Les zones de bombe sont
                entourées de chemins sinueux et de passages étroits qui offrent de nombreux angles pour les tirs de précision.</p>
        </li>
        <li>
            <h2>Lotus</h2>
            <img class="carteimg" src="view/content/images/Lotus.png" alt="Image de la carte Lotus">
            <p>Cette carte est également une carte de type "Démolition" et se déroule dans une ville futuriste et high-tech avec des thèmes de néon et de métal.
                Les joueurs commencent dans des zones de spawn opposées et doivent se déplacer vers les sites de bombe situés dans les bâtiments de la ville.
                Les zones de bombe sont entourées de couloirs étroits et de pièces avec des angles d'attaque uniques, offrant une expérience de jeu intense.</p>
        </li>
        <li>
            <h2>Fracture</h2>
            <img class="carteimg" src="view/content/images/Fracture.png" alt="Image de la carte Fracture">
            <p>Cette carte est une carte de type "Défense/Attaque" se déroulant dans un environnement désertique avec des thèmes de pierre et de métal.
                Les joueurs sont répartis en deux équipes : les défenseurs qui protègent une zone de bombe et les attaquants qui cherchent à la récupérer.
                La carte est conçue avec des chemins multiples et des passages secrets, ce qui permet aux joueurs de se faufiler derrière les ennemis pour
                gagner un avantage.</p>
        </li>
        <li>
            <h2>The Range</h2>
            <img class="carteimg" src="view/content/images/The_Range.png" alt="Image de la carte The Range">
            <p>Cette carte est une carte d'entraînement qui permet aux joueurs de pratiquer leurs compétences de tir et de se familiariser avec les différents
                types d'armes disponibles dans le jeu. Elle est conçue pour ressembler à un stand de tir et offre des cibles mobiles ainsi que des obstacles pour
                les joueurs à surmonter.</p>
        </li>
    </ul>

    </body>

<?php
$content = ob_get_clean();
require "gabarit.php";
