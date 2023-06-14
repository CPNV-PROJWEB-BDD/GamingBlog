<?php
function login($login)
{
    if (isset($login["email"], $login["mdp"])) {
        // Récupération des données du formulaire
        $email = $login["email"];
        $mdp = $login["mdp"];

        require_once "model/manager.php";
        if (IsLoginCorrect($email, $mdp)) {
            createSession($email, $mdp);
            require "view/home.php";
        } else {
            $errorMessage = "L'email ou le mot de passe est incorrect. Veuillez réessayer.";
            require "view/login.php";
        }
    } else {
        require "view/login.php";
    }
}

function register($register)
{
    if (isset($register["email"], $register["mdp"])) {
// Récupération des données du formulaire
        $email = $register["email"];
        $mdp = $register["mdp"];

        require_once "model/manager.php";
        if (verifyInformation($email)) {
            if (getRegisterData($email, $mdp)) {
                createSession($email, $mdp);
            } else {

            }

            header("Location: index.php");
        } else {
            $errorMessage = "L'email entré existe déjà.";
            require "view/register.php";
        }
    } else {
        require "view/register.php";
    }
}

function displayRegisterPHP($GiveFormular)
{
    require 'model/registerphp.php';
    DataRegisterPHP($GiveFormular);
}