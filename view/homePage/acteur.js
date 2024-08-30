// ------------------------------ CAROUSSEL ACTEURS ----------------------------
const boutonGaucheActeurs = document.querySelector('.carrousel-bouton.precedent');
const boutonDroitActeurs = document.querySelector('.carrousel-bouton.suivant');
const conteneurCarrouselActeurs = document.querySelector('.carrousel-conteneur');
const elementsDiapositiveActeurs = document.querySelectorAll('.carrousel-diapositive');
let positionActuelleActeurs = 0;

function rafraichirCarrouselActeurs() {
    conteneurCarrouselActeurs.style.transform = `translateX(-${positionActuelleActeurs * 100}%)`;
}

boutonDroitActeurs.addEventListener('click', () => {
    positionActuelleActeurs = (positionActuelleActeurs + 1) % elementsDiapositiveActeurs.length;
    rafraichirCarrouselActeurs();
});

boutonGaucheActeurs.addEventListener('click', () => {
    positionActuelleActeurs = (positionActuelleActeurs - 1 + elementsDiapositiveActeurs.length) % elementsDiapositiveActeurs.length;
    rafraichirCarrouselActeurs();
});
