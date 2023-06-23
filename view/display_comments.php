<?php
$file = '../data/comments.json';

if (file_exists($file)) {
    $commentaires = json_decode(file_get_contents($file), true);

    foreach ($commentaires as $commentaire) {
        $pseudo = $commentaire['pseudo'];
        $message = $commentaire['message'];
        $date = $commentaire['date'];

        echo "<div class='commentaire'><p><strong>$pseudo</strong> | $date<br>$message</p></div>";
    }
}
?>