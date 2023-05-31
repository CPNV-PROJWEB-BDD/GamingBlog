<?php
function login($login)
{
    if (isset($login["nom"], $login["mdp"])) {
        // Récupération des données du formulaire
        $nom = $login["nom"];
        $mdp = $login["mdp"];

        // Création d'un tableau avec les données
        $data = array(
            "nom" => $nom,
            "mdp" => $mdp,
        );

        // Chargement du contenu du fichier JSON existant
        $file = "data.json";
        $current_data = file_get_contents($file);

        // Décodage du JSON en un tableau PHP
        $current_data = json_decode($current_data, true);

        // Ajout des nouvelles données au tableau
        $current_data[] = $data;

        // Encodage du tableau en JSON
        $json_data = json_encode($current_data, JSON_PRETTY_PRINT);

        // Stockage du JSON dans le fichier
        file_put_contents($file, $json_data);

        header("Location: index.php");
    } else {
        require "view/login.php";
    }
}

function register($register)
{
    if (isset($register["nom"], $register["mdp"])) {
// Récupération des données du formulaire
        $nom = $register["nom"];
        $mdp = $register["mdp"];

// Création d'un tableau avec les données
        $data = array(
            "nom" => $nom,
            "mdp" => $mdp,
        );

// Chargement du contenu du fichier JSON existant
        $file = "data.json";
        $current_data = file_get_contents($file);

// Décodage du JSON en un tableau PHP
        $current_data = json_decode($current_data, true);

// Ajout des nouvelles données au tableau
        $current_data[] = $data;

// Encodage du tableau en JSON
        $json_data = json_encode($current_data, JSON_PRETTY_PRINT);

// Stockage du JSON dans le fichier
        file_put_contents($file, $json_data);

        header("Location: index.php");
    } else {
        require "view/register.php";
    }
}

function displayRegisterPHP($GiveFormular)
{
    require 'model/registerphp.php';
    DataRegisterPHP($GiveFormular);
}