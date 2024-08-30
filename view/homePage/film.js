// ------------------------------- CAROUSSEL FILMS --------------------------------
const boutonGaucheFilms = document.querySelector('.carrousel-bouton.precedent');
const boutonDroitFilms = document.querySelector('.carrousel-bouton.suivant');
const conteneurFilms = document.querySelector('.carrousel-conteneur');
const listeFilms = document.querySelectorAll('.carrousel-diapositive');

let filmActuel = 0;

function mettreAJourCarrouselFilms() {
    conteneurFilms.style.transform = `translateX(-${filmActuel * 100}%)`;
}

boutonDroitFilms.addEventListener('click', () => {
    filmActuel = (filmActuel + 1) % listeFilms.length;
    mettreAJourCarrouselFilms();
});

boutonGaucheFilms.addEventListener('click', () => {
    filmActuel = (filmActuel - 1 + listeFilms.length) % listeFilms.length;
    mettreAJourCarrouselFilms();
});
