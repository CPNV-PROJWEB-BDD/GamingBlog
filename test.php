<?php

use PHPMailer\PHPMailer\PHPMailer;

try{
    sendMail("nicolas.glassey@cpnv.ch", "nicolas.glassey@cpnv.ch", "J. Perez", "nicolas.glassey@cpnv.ch", "J. Perez", "mon message");
}catch (\PHPMailer\PHPMailer\Exception $ex){
    echo $ex;
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