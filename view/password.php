<?php
/**
 * @file password.php
 * @brief File description
 * @author Created by Julian.PEREZ
 * @version 15.03.2023
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération de l'adresse e-mail fournie par l'utilisateur
    $email = $_POST['email'];

    // Génération d'un nouveau mot de passe aléatoire
    $new_password = generatePassword();

    // Envoi de l'e-mail contenant le nouveau mot de passe
    $headers = "From: valoblog <valobloginc@gmail.com>";
    $subject = "Réinitialisation du mot de passe";
    $message = "Bonjour,\n\nVous avez effectué une demande de réinitialisation de votre mot de passe. Votre nouveau mot de passe généré automatiquement ce trouve ci-dessous :\n " . $new_password . "\n\nCordialement,\nL'équipe Valoblog";
    if (mail($email, $subject, $message, $headers)) {
        echo "Un nouveau mot de passe a été envoyé à votre adresse e-mail.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du nouveau mot de passe. Veuillez réessayer plus tard.";
    }
}

function generatePassword() {
    // Génération d'un nouveau mot de passe aléatoire
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = "";
    for ($i = 0; $i < 8; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

ob_start();
$title ="Valoblog - Mot de passe oublié";
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Se connecter</title>
        <link rel="stylesheet" href="view/content/assets/css/password.css">
        <link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86"/>
    </head>
    <body>
    <form method="post">
        <div class="box">
            <div class="form">
                <h2>Mot de passe oublié</h2>
                <div class="inputBox">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" required="required">
                    <i></i>
                </div>
                <div class="links">
                    <a href="index.php?action=loginForm">Se connecter</a>
                    <a href="index.php?action=registerForm">S'inscrire</a>
                </div>
                <input type="submit" value="Envoyer">
            </div>
        </div>
    </form>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";
