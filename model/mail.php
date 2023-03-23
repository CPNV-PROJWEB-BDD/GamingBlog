<?php
sendEmail("julian.perez@cpnv.ch");

function sendEmail($to) {

    // Envoi de l'e-mail contenant le nouveau mot de passe
    $from = "From: valoblog <incvaloblog@gmail.com>";
    $subject = "Réinitialisation du mot de passe";
    $message = "Bonjour,\n\nVous avez effectué une demande de réinitialisation de votre mot de passe.";
    if (mail($to, $subject, $message, $from)) {
        echo "Un nouveau mot de passe a été envoyé à votre adresse e-mail.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du nouveau mot de passe. Veuillez réessayer plus tard.";
    }
}