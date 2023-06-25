$(document).ready(function() {
    // Soumission du formulaire
    $('#comment-form').submit(function(event) {
        event.preventDefault();

        // Récupération des données du formulaire
        var pseudo = $('#pseudo').val();
        var message = $('#message').val();

        // Envoi des données au script PHP via AJAX
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: {
                pseudo: pseudo,
                message: message
            },
            success: function() {
                // Réinitialisation des champs du formulaire
                $('#pseudo').val('');
                $('#message').val('');

                // Actualisation des commentaires
                chargerCommentaires();
            }
        });
    });

    // Chargement initial des commentaires
    chargerCommentaires();

    // Actualisation automatique des commentaires
    setInterval(chargerCommentaires, 5000); // Actualisation toutes les 5 secondes
});

function chargerCommentaires() {
    $.ajax({
        url: '../view/display_comments.php',
        type: 'GET',
        success: function(data) {
            $('#commentaires').html(data);
        }
    });
}