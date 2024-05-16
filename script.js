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



