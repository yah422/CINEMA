// ------------------------ CAROUSSEL REALISATEURS --------------------------------------
const boutonPrecedentRealisateurs = document.querySelector('.carrousel-bouton.precedent');
const boutonSuivantRealisateurs = document.querySelector('.carrousel-bouton.suivant');
const carrouselConteneurRealisateurs = document.querySelector('.carrousel-conteneur');
const diapositivesRealisateurs = document.querySelectorAll('.carrousel-diapositive');
let indexActuelRealisateurs = 0;

function mettreAJourCarrouselRealisateurs() {
    carrouselConteneurRealisateurs.style.transform = `translateX(-${indexActuelRealisateurs * 100}%)`;
}

boutonSuivantRealisateurs.addEventListener('click', () => {
    indexActuelRealisateurs = (indexActuelRealisateurs + 1) % diapositivesRealisateurs.length;
    mettreAJourCarrouselRealisateurs();
});

boutonPrecedentRealisateurs.addEventListener('click', () => {
    indexActuelRealisateurs = (indexActuelRealisateurs - 1 + diapositivesRealisateurs.length) % diapositivesRealisateurs.length;
    mettreAJourCarrouselRealisateurs();
});
