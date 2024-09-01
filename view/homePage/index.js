// -------------------------- CAROUSSEL FILMS ------------------------------------

// Sélectionne tous les boutons de navigation du carrousel
const buttons = document.querySelectorAll("[data-carousel-button]");

buttons.forEach(button => {
  button.addEventListener("click", () => {
    // Détermine le décalage en fonction du bouton cliqué (précédent ou suivant)
    const offset = button.dataset.carouselButton === "next" ? 1 : -1;
    
    // Trouve l'élément qui contient les slides du carrousel
    const slides = button.closest("[data-carousel]").querySelector("[data-slides]");

    if (slides) {
      // Trouve la slide actuellement active
      const activeSlide = slides.querySelector("[data-active]");
      let newIndex = [...slides.children].indexOf(activeSlide) + offset;

      // Gère le bouclage du carrousel en revenant au début ou en allant à la fin
      if (newIndex < 0) newIndex = slides.children.length - 1;
      if (newIndex >= slides.children.length) newIndex = 0;

      // Met à jour la nouvelle slide active
      slides.children[newIndex].dataset.active = true;
      delete activeSlide.dataset.active;
    }
  });
});
