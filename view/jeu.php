<link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
<?php
/**
 * @file jeu.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 08.03.2023
 */
ob_start();
$title="ValoBlog - Armes";
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/content/assets/css/main.css" />
    <img class="valologo" src="view/content/images/valorant.png">
    <title>ValoBlog - Jeu</title>
</head>
<body>
<h2>Gameplay</h2>
<p>Le gameplay de Valorant est centré sur deux équipes de cinq joueurs qui s'affrontent pour remplir des objectifs. Les joueurs choisissent des personnages appelés "Agents" qui ont des compétences uniques pour les aider dans le jeu.</p>
<h2>Classes d'Agents</h2>
<table>
    <thead>
    <tr>
        <th>Titre</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Sentinelles</td>
        <td><a onclick="openModal('Explication des sentinelles : Les Sentinelles sont des « experts de la défense qui peuvent verrouiller des zones et faire attention aux flanks en attaque et en défense. » Dans une partie faite pour le plant ou le defuse d’un Spike, ces agents sont essentiels. Chamber, Cypher et Killjoy tiennent des sites avec leurs gadgets, alors que Sage met un terme aux push et rotations avec ses ralentissements et barricades.')">Cliquer pour voir les explications</a></td>
    </tr>
    <tr>
        <td>Contrôleurs</td>
        <td><a onclick="openModal('Explication des contrôleurs : Les contrôleurs sont des experts pour s’insérer dans les « terres dangereuses » pour permettre à leur équipe de trouver la victoire. Cela prend souvent la forme de smokes, qui peuvent être utilisées en attaque ou en défense pour bloquer la cible d’une cible mais ralentit, étourdit et flash aussi, parfois.')">Cliquer pour voir les explications</a></td>
    </tr>
    <tr>
        <td>Duellistes</td>
        <td><a onclick="openModal('Explication des duellistes : Les duellistes sont des tireurs qui peuvent se suffire à eux-mêmes. Ce sont des agents qui ont le plus grand impact, en offrant de l’agression à leur équipe. Un Duelliste devrait être vu en train de chercher des engages et des kills, que ce soit l’élimination opener ou le clutch de fin de round.')">Cliquer pour voir les explications</a></td>
    </tr>
    <tr>
        <td>Initiateurs</td>
        <td><a onclick="openModal('Explication des initiateurs : Les initiateurs « défient des angles en installant leur équipe pour entrer sur des terres contestées et repousser les défenseurs ». Ces agents excellent souvent en attaque, pour mettre leurs alliés en situation. Breach, KAY/O et Skye offrent des flash ou des étourdissements dans une forme ou une autre, alors que Sova offre de la vision.')">Cliquer pour voir les explications</a></td>
    </tr>
    </tbody>
</table>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <p id="modalText"></p>
    </div>
</div>

<script>
    // Fonction pour ouvrir la fenêtre modale
    function openModal(text) {
        document.getElementById("modalText").innerHTML = text;
        document.getElementById("myModal").style.display = "block";
    }
    // Fonction pour fermer la fenêtre modale
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    // Fermer la fenêtre modale si l'utilisateur clique en dehors de celle-ci
    window.onclick = function(event) {
        if (event.target == document.getElementById("myModal")) {
            closeModal();
        }
    }
</script>

<h2>Mode de jeu</h2>
<p>Le mode de jeu principal de Valorant est appelé "Défense/Attaque". Une équipe doit défendre des sites tandis que l'autre équipe doit tenter de les prendre.</p>
<iframe class="video" src="https://www.youtube.com/embed/IhhjcB2ZjIM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<h2>Compétition</h2>
<p>Valorant est également connu pour sa scène compétitive. Le jeu a un système de classement qui permet aux joueurs de s'affronter dans des matchs classés.</p>
</body>

</body>

<?php
$content = ob_get_clean();
require "gabarit.php";
