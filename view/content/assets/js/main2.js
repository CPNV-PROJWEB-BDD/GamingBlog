// On ajoute un écouteur d'événements pour détecter lorsque la souris entre sur l'image
image.addEventListener("mouseenter", function() {
    // On agrandit légèrement l'image
    image.style.transform = "scale(1.2)";
});

// On ajoute un écouteur d'événements pour détecter lorsque la souris quitte l'image
image.addEventListener("mouseleave", function() {
    // On remet l'image à sa taille d'origine
    image.style.transform = "scale(1)";
});
