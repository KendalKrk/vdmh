function expandCard(button) {
    
    var card = button.parentElement;
    card.classList.toggle('expanded');
    var moreText = card.querySelector('#more1');
    moreText.style.display = moreText.style.display === 'none' ? 'inline' : 'none';
    button.textContent = button.textContent === 'Voir plus' ? 'Voir moins' : 'Voir plus';
    if (moreText.style.display === 'inline') {
        setTimeout(function() {
            window.scrollTo({top: card.getBoundingClientRect().top + window.pageYOffset - 100, behavior: 'smooth'});
        }, 500); 
    }
}






AOS.init();





window.onload = function() {
    var imagesDiv = document.getElementById('images');
    var images = Array.from(imagesDiv.children);
    var totalWidth = 0;

    
    images.forEach(function(img) {
        totalWidth += img.offsetWidth + 30;
    });

   
    imagesDiv.style.width = totalWidth * 2 + 'px';

    
    images.forEach(function(img) {
        imagesDiv.appendChild(img.cloneNode(true));
    });

   
    imagesDiv.style.animationDuration = '50s'; 
};



