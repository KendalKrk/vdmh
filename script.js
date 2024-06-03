function expandCard(button) {
    // Ouvrir la carte sélectionnée
    var card = button.parentElement;
    card.classList.toggle('expanded');
    var moreText = card.querySelector('#more1');
    moreText.style.display = moreText.style.display === 'none' ? 'inline' : 'none';
    button.textContent = button.textContent === 'Voir plus' ? 'Voir moins' : 'Voir plus';
    if (moreText.style.display === 'inline') {
        setTimeout(function() {
            window.scrollTo({top: card.getBoundingClientRect().top + window.pageYOffset - 100, behavior: 'smooth'});
        }, 500); // Retarder le défilement de 500 ms
    }
}






AOS.init();





window.onload = function() {
    var imagesDiv = document.getElementById('images');
    var images = Array.from(imagesDiv.children);
    var totalWidth = 0;

    // Calculer la largeur totale des images incluant la marge droite de 30px
    images.forEach(function(img) {
        totalWidth += img.offsetWidth + 30;
    });

    // Mettre à jour la largeur du conteneur des images pour inclure deux ensembles d'images
    imagesDiv.style.width = totalWidth * 2 + 'px';

    // Doublons les images pour créer un effet de défilement continu
    images.forEach(function(img) {
        imagesDiv.appendChild(img.cloneNode(true));
    });

    // Appliquer l'animation via CSS
    imagesDiv.style.animationDuration = '50s'; // Ajuster cette valeur pour changer la vitesse
};



