<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_SESSION['email'];
    $message = $_POST['message'];
    $date = date('Y-m-d H:i');

    $comment = array(
        'pseudo' => $pseudo,
        'message' => $message,
        'date' => $date
    );

    $file = '../data/comments.json';

    $commentaires = array();

    if (file_exists($file)) {
        $commentaires = json_decode(file_get_contents($file), true);
    }

    $commentaires[] = $comment;

    file_put_contents($file, json_encode($commentaires));
}

header('Location: ../view/comments.php');
exit;
?>