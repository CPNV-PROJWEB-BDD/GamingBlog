<link rel="shortcut icon" href="https://i.scdn.co/image/ab6761610000e5ebf777c8d6f705fa1e32f75b86">
<?php
/**
 * @file comments.php
 * @brief File description
 * @author Created by Julian.PEREZ
 * @version 23.06.2023
 */
ob_start();
$title="ValoBlog - Commentaires";
?>
<!DOCTYPE html>
<html>
<head>
    <title>ValoBlog - Commentaires</title>
    <link rel="stylesheet" type="text/css" href="../content/assets/css/comments.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../view/content/assets/js/comments.js"></script>
</head>
<body>
<div class="container">
    <h1>Ajouter un commentaire</h1>
    <form method="POST" action="../model/add_comments.php">
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
        <br>
        <input type="submit" value="Ajouter">
    </form>
    <h2>Commentaires</h2>
    <?php include 'display_comments.php'; ?>
</div>
</body>
</html>

<?php
$content = ob_get_clean();
require "gabarit.php";
