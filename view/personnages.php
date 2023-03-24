<link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
<?php
/**
 * @file personnages.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 08.03.2023
 */
ob_start();
$title="ValoBlog - Armes";
?>

    <head>
        <meta charset="UTF-8">
        <title>Agents de Valorant</title>
        <link rel="stylesheet" href="view/content/assets/css/main.css" />
    </head>
    <body>
    <header>
        <h1>Les agents de Valorant</h1>
    </header>
    <main>
        <h2>Les duellistes</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Capacité 1</th>
                <th>Capacité 2</th>
                <th>Capacité 3</th>
                <th>Capacité ultime</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Jett</td>
                <td>Lames tournoyantes</td>
                <td>Vent ascendant</td>
                <td>Frappes nuageuses</td>
                <td>Coup de grâce</td>
                <td><img src=view/content/images/jett.png width="100" alt="Jett"></td>
            </tr>
            <tr>
                <td>Phoenix</td>
                <td>Boule de feu</td>
                <td>Mur de flamme</td>
                <td>Courant chaud</td>
                <td>Rideau de feu</td>
                <td><img class="pho" src=view/content/images/phoenix.png width="100" alt="Phoenix"></td>
            </tr>
            <!-- Ajoutez d'autres lignes pour chaque agent -->
        </table>

        <h2>Les initiés</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Capacité 1</th>
                <th>Capacité 2</th>
                <th>Capacité 3</th>
                <th>Capacité ultime</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Sova</td>
                <td>Carquois de drônes</td>
                <td>Carquois de reconnaissance</td>
                <td>Flèche choc</td>
                <td>Chasseur traqueur</td>
                <td><img src=view/content/images/sova.png width="100" alt="Sova"></td>
            </tr>
            <tr>
                <td>Sage</td>
                <td>Orbe de guérison</td>
                <td>Orbe barrière</td>
                <td>Orbe lenteur</td>
                <td>Ressuscitation</td>
                <td><img src=view/content/images/sage.png width="100" alt="Sage"></td>
            </tr>
            <!-- Ajoutez d'autres lignes pour chaque agent -->
        </table>

        <h2>Les contrôleurs</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Capacité 1</th>
                <th>Capacité 2</th>
                <th>Capacité 3</th>
                <th>Capacité ultime</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Brimstone</td>
                <td>Incendiaire</td>
                <td>Fumigène stimulant</td>
                <td>Stimulateur</td>
                <td>Orbite cinétique</td>
                <td><img src=view/content/images/brim.png width="100" alt="Brimstone"></td>
            </tr>
            <tr>
                <td>Omen</td>
                <td>Paranoïa</td>
                <td>Assombrissement</td>
                <td>Ombre téléportée</td>
                <td>Assaut des ombres</td>
                <td><img src=view/content/images/omen.png width="100" alt="Omen"></td>
            </tr>
            <!-- Ajoutez d'autres lignes pour chaque agent -->
        </table>

        <h2>Les sentinelles</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Capacité 1</th>
                <th>Capacité 2</th>
                <th>Capacité 3</th>
                <th>Capacité ultime</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Cypher</td>
                <td>Piège de filin</td>
                <td>Caméra espionne</td>
                <td>Piège de barbelés</td>
                <td>Recherche de cibles</td>
                <td><img src=view/content/images/cypher.png width="100" alt="Cypher"></td>
            </tr>
            <tr>
                <td>Killjoy</td>
                <td>Tourelle de sécurité</td>
                <td>Alarme de proximité</td>
                <td>Boule de démolition</td>
                <td>Verrou de survie</td>
                <td><img src=view/content/images/killjoy.png width="100" alt="Killjoy"></td>
            </tr>
            <!-- Ajoutez d'autres lignes pour chaque agent -->
        </table>
    </main>
    </body>

<?php
$content = ob_get_clean();
require "gabarit.php";
