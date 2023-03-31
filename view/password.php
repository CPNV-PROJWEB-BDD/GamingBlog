<?php
/**
 * @file password.php
 * @brief File description
 * @author Created by Julian.PEREZ
 * @version 15.03.2023
 */


use PHPMailer\PHPMailer\PHPMailer;

$msg = '';;
if (array_key_exists('email', $_POST)) {
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'email-smtp.us-west-2.amazonaws.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'AKIA2KFJKL4OXQ6T66OK ';
    $mail->Password = 'BC+iEUjyQyDbNigMCwnyLKCmCWK/jO4mAyqLcvujY9fW ';

    $mail->setFrom('incvaloblog@gmail.com', 'Valoblog');
    $mail->addAddress('julian.perez@cpnv.ch', 'Test');
    if ($mail->addReplyTo($_POST['email'])) {
        $mail->Subject = 'PHPMailer contact form';
        $mail->isHTML(false);
        $mail->Body = "Ceci est un test";

        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }
}

ob_start();
$title = "Valoblog - Mot de passe oublié";
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
                    <input id="email" type="email" name="email" required="required">
                    <i></i>
                </div>
                <div class="links">
                    <a href="index.php?action=displayLogin">Se connecter</a>
                    <a href="index.php?action=displayRegister">S'inscrire</a>
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
