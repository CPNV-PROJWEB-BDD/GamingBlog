<?php
// Récupération des données du formulaire
$nom = $_POST["nom"];
$mdp = $_POST["mdp"];

// Chargement du contenu du fichier JSON existant
$file = "data.json";
$current_data = file_get_contents($file);

// Décodage du JSON en un tableau PHP
$current_data = json_decode($current_data, true);

// Vérification des informations de connexion
$connected = false;
foreach ($current_data as $user) {
    if ($user["nom"] == $nom && $user["mdp"] == $mdp) {
        $connected = true;
        break;
    }
}

// Redirection vers la page appropriée en fonction du résultat de la connexion
if ($connected) {
    header("Location: index.php");
    exit();
} else {
    header("Location: connect.php?error=" . urlencode($error_message));
    exit();
}
?>