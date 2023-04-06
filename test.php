<?php

use PHPMailer\PHPMailer\PHPMailer;

try{
    sendMail("nicolas.glassey@cpnv.ch", "nicolas.glassey@cpnv.ch", "J. Perez", "nicolas.glassey@cpnv.ch", "J. Perez", "Bonjour, votre nouveau mot de passe est :");
}catch (\PHPMailer\PHPMailer\Exception $ex){
    echo $ex;
}

$nouveau_mot_de_passe = '';

// Liste des caractères possibles pour le mot de passe
$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

// Générer un mot de passe aléatoire de 8 caractères en choisissant des caractères au hasard dans la liste
for ($i = 0; $i < 8; $i++) {
    $nouveau_mot_de_passe .= $caracteres[rand(0, strlen($caracteres) - 1)];
}

/**
 * @throws \PHPMailer\PHPMailer\Exception
 */
function sendMail($email, $setFromAddress, $setFromName, $recipientAddress, $recipientName, $message){
    $msg = '';
    {
        require 'vendor/autoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'email-smtp.us-west-2.amazonaws.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'AKIA2KFJKL4OXQ6T66OK ';
        $mail->Password = 'BC+iEUjyQyDbNigMCwnyLKCmCWK/jO4mAyqLcvujY9fW ';

        $mail->setFrom($setFromAddress, $setFromName);
        $mail->addAddress($recipientAddress, $recipientName);
        if ($mail->addReplyTo($email, $setFromName)) {
            $mail->Subject = 'PHPMailer contact form';
            $mail->isHTML(false);
            $mail->Body = <<<EOT
                Email: {$email}
                Name: {$setFromName}
                Message: {$message}
    EOT;
            if (!$mail->send()) {
                echo 'Sorry, something went wrong. Please try again later.';
            } else {
                echo 'Message sent! Thanks for contacting us.';
            }
        } else {
            echo 'Share it with us!';
        }
    }
}
?>