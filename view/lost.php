<?php

// tampon de flux sotcké en mémoire
ob_start();
$title ="Valoblog - Erreur";
?>

<head>
    <title>Erreur - Valorant</title>
    <link rel="stylesheet" type="text/css" href="content/assets/css/lost.css">
    <link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
</head>
<body>
<div class="container">
    <h1>Une erreur s'est produite</h1>
    <img src="content/images/valoblog.png" alt="Erreur 404 - Valorant">
    <p>Nous sommes désolés, mais la page que vous cherchez n'a pas pu être trouvée.</p>
    <a href="../../index.php" class="btn">Retourner à l'accueil</a>
</div>
</body>

<?php
$content = ob_get_clean();
require "gabarit.php";
