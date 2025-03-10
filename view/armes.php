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
        <h1>Les armes de Valorant</h1>
    </header>
    <main>
        <h2>Les pistolets</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Dégâts</th>
                <th>Prix</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Classic</td>
                <td>78</td>
                <td>Free</td>
                <td><img src="view/content/images/classic.png" height="100" alt="Classic"></td>
            </tr>
            <tr>
                <td>Shorty</td>
                <td>12x2</td>
                <td>200</td>
                <td><img src="view/content/images/valorant-shorty-profile-icon.png" height="100"  alt="Shorty"></td>
            </tr>
            <!-- Ajoutez d'autres lignes pour chaque arme -->
        </table>

        <h2>Les fusils d'assaut</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Dégâts</th>
                <th>Prix</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Vandal</td>
                <td>39</td>
                <td>2900</td>
                <td><img src="view/content/images/valorant-vandal-profile-icon.png" height="100" alt="Vandal"></td>
            </tr>
            <tr>
                <td>Phantom</td>
                <td>35</td>
                <td>2900</td>
                <td><img src="view/content/images/phantom.png" height="100" alt="Phantom"></td>
            </tr> <!-- Ajoutez d'autres lignes pour chaque arme --> </table>
        <h2>Les fusils à pompe</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Dégâts</th>
                <th>Prix</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Bucky</td>
                <td>44x5</td>
                <td>900</td>
                <td><img src="view/content/images/bucky.png" height="100" alt="Bucky"></td>
            </tr>
            <tr>
                <td>Judge</td>
                <td>17x7</td>
                <td>1600</td>
                <td><img src="view/content/images/valorant-judge-profile-icon.png" height="100" alt="Judge"></td>
            </tr>
            <!-- Ajoutez d'autres lignes pour chaque arme -->
        </table>

        <h2>Les mitraillettes</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Dégâts</th>
                <th>Prix</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Stinger</td>
                <td>27</td>
                <td>1100</td>
                <td><img src="view/content/images/stinger.png" height="100" alt="Stinger"></td>
            </tr>
            <tr>
                <td>Spectre</td>
                <td>26</td>
                <td>1600</td>
                <td><img src="view/content/images/spectre.png" height="100" alt="Spectre"></td>
            </tr>
            <!-- Ajoutez d'autres lignes pour chaque arme -->
        </table>

        <h2>Les fusils de précision</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Dégâts</th>
                <th>Prix</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Operator</td>
                <td>120</td>
                <td>4900</td>
                <td><img src="view/content/images/operator.png" height="100" alt="Operator"></td>
            </tr>
            <tr>
                <td>Marshal</td>
                <td>202</td>
                <td>1100</td>
                <td><img src="view/content/images/valorant-marshal-profile-icon.png" height="150" alt="Marshal"></td>
            </tr>
            <!-- Ajoutez d'autres lignes pour chaque arme -->
        </table>
    </main>
    </body>
<?php
$content = ob_get_clean();
require "gabarit.php";
 
