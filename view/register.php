<link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
<?php
/**
 * @file register.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 08.03.2023
 */


ob_start();
$title ="Valoblog - S'inscrire";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="view/content/assets/css/register.css">
    <link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
</head>
<body>
<form method="post" action="index.php?action=register" target="_blank">
    <div class="box">
        <div class="form">
            <h2>S'inscrire</h2>
            <div class="inputBox">
                <label for="nom">E-Mail</label>
                <input type="text" id="nom" name="nom" required="required">
                <i></i>
            </div>
            <div class="inputBox">
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" required="required">
                <i></i>
            </div>
            <div class="links">
                <a href="#"></a>
                <a href="index.php?action=login">Se connecter</a>
            </div>
            <input type="submit" value="S'inscrire">
        </div>
    </div>
</form>
</body>
</html>

<?php
$content = ob_get_clean();
require "gabarit.php";