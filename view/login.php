<link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
<?php
/**
 * @file connect.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 08.03.2023
 */

ob_start();
$title ="Valoblog - Se Connecter";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
    <link rel="stylesheet" href="view/content/assets/css/login.css">
    <link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86"/>
</head>
<body>
<?php if (isset($errorMessage)) :?>
<span style="color: #dc3d4b"><?=$errorMessage?></span>
<?php endif?>
<form method="post" action="index.php?action=login">
    <div class="box">
        <div class="form">
            <h2>Se Connecter</h2>
            <div class="inputBox">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" required="required">
                <i></i>
            </div>
            <div class="inputBox">
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" required="required">
                <i></i>
            </div>
            <div class="links">
                <a href="index.php?action=forgetPassword">Mot de passe oublié </a>
                <a href="index.php?action=register">S'inscrire</a>
            </div>
            <input type="submit" value="Login">
        </div>
    </div>
</form>
</body>
</html>

<?php
$content = ob_get_clean();
require "gabarit.php";
