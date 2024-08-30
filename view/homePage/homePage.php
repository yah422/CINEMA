<?php 
ob_start(); 

?>

<main> 
    <!-- -------------- carousel ----------------- -->
    <section aria-label="Newest Photos">
        <div class="carousel" data-carousel>
            <button class="carousel-button prev" data-carousel-button="prev">&lang;</button>
            <button class="carousel-button next" data-carousel-button="next">&rang;</button>
            <ul data-slides>
                <li class="slide" data-active>
                    <img src="public/images/inception1_carousel.jpg" alt="inception Image #1">
                </li>
                <li class="slide">
                    <img src="public/images/carousel.jpg" alt="lalaland Image #2">
                </li>
                <li class="slide">
                    <img src="public/images/male_carousel.jpg" alt="malediction Image #3">
                </li>
            </ul>
        </div>
    </section>
<!-- ------------------------------ AFFICHE NOUVEAUTE ------------------------------ -->
        <!-- <ul>
            <li>
                <a href="index.php?action=detailFilm&id=5">
                    <img src="public/images/darkaffiche.jpg" alt="affiche_dark"> 
                    <p class="movies">The Dark Knight </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=1">
                    <p class="directors"> Chritopher Nolan </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=1">
                    <img src="public/images/afficheInception.jpg" alt="affiche_inception">
                    <p class="movies"> Inception </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=1">
                    <p class="directors"> Christopher Nolan </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=6">
                    <img src="public/images/forest.jpg" alt="affiche_forestGump">
                    <p class="movies"> Forrest Gump </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=5">
                    <p class="directors"> Quentin Tarantino </p>
                </a>
            </li>
        </ul> -->
        <br>
<!-- ---------------------------- SECTION CITATION ------------------------------ -->
        <section id="citation">
            <p> “ La vraie séduction de l&rsquo;acteur, c&rsquo;est de faire admettre au public qu&rsquo;il est vraiment le personnage. “</p>
            <p> Bernard GIRAUDEAU </p>
        </section>
<!-- ------------------------------ AJOUT SECTION A LA UNE ----------------------- -->
        <section id="alaUne">
            <div class="title">
                <div class="ligneAcceuil"> </div>
                <h2> A LA UNE </h2>
            </div>
            
            <ul>
                <li>
                    <a href="index.php?action=detailFilm&id=2">
                        <img src="public/images/lalalandAffiche.jpg" alt="lalalandAffiche">
                        <p class="movies"> Lalaland </p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=15">
                        <p class="directors"> Steven Spielberg </p>
                    </a>
                </li>

                <li>
                    <a href="index.php?action=detailFilm&id=4">
                        <img src="public/images/pulpFiction.jpg" alt="affiche_pulpfiction">
                        <p class="movies"> Pulp Fiction </p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=16">
                        <p class="directors"> The Wachowskis </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailFilm&id=12">
                        <img src="public/images/malediction.jpg" alt="affiche_malediction">
                        <p class="movies"> Malédiction : l'Origine</p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=3">
                        <p class="directors"> Stevenson Arkasha</p>
                    </a>
                </li>
            </ul>

        </section>
<!-- --------------------------------- AJOUT FILMS ----------------------------- --> 

    <section id="carrousel-films">
        <div class="title">
            <div class="ligneAcceuil"> </div>
            <h2> <a href="index.php?action=listFilm">FILM</a> </h2>
        </div>

    <div class="carrousel-conteneur">
        <ul class="carrousel-elements">
            <li class="carrousel-element">
                <a href="index.php?action=detailFilm&id=5">
                    <img src="public/images/darkaffiche.jpg" alt="affiche_dark"> 
                    <p class="movies">The Dark Knight</p>
                </a>
                <a href="index.php?action=detailRealisateur&id=1">
                    <p class="directors">Christopher Nolan</p>
                </a>
            </li>
            <li class="carrousel-element">
                <a href="index.php?action=detailFilm&id=6">
                    <img src="public/images/forest.jpg" alt="affiche_forestGump">
                    <p class="movies">Forrest Gump</p>
                </a>
                <a href="index.php?action=detailRealisateur&id=5">
                    <p class="directors">Quentin Tarantino</p>
                </a>
            </li>
            <li class="carrousel-element">
                <a href="index.php?action=detailFilm&id=7">
                    <img src="public/images/thegodfather.jpg" alt="affiche_godfather">
                    <p class="movies">The GodFather</p>
                </a>
                <a href="index.php?action=detailRealisateur&id=6">
                    <p class="directors">Damien Gazelle</p>
                </a>
            </li>
            <li class="carrousel-element">
                <a href="index.php?action=detailFilm&id=1">
                    <img src="public/images/afficheInception.jpg" alt="affiche_inception">
                    <p class="movies">Inception</p>
                </a>
                <a href="index.php?action=detailRealisateur&id=1">
                    <p class="directors">Christopher Nolan</p>
                </a>
            </li>
            <li class="carrousel-element">
                <a href="index.php?action=detailFilm&id=2">
                    <img src="public/images/lalalandAffiche.jpg" alt="lalalandAffiche">
                    <p class="movies">Lalaland</p>
                </a>
                <a href="index.php?action=detailRealisateur&id=2">
                    <p class="directors">Steven Spielberg</p>
                </a>
            </li>
            <li class="carrousel-element">
                <a href="index.php?action=detailFilm&id=4">
                    <img src="public/images/pulpFiction.jpg" alt="affiche_pulpfiction">
                    <p class="movies">Pulp Fiction</p>
                </a>
                <a href="index.php?action=detailRealisateur&id=4">
                    <p class="directors">The Wachowskis</p>
                </a>
            </li>
        </ul>
    </div>
    
    <button class="carrousel-bouton precedent">&#10094;</button> <!-- Flèche gauche -->
    <button class="carrousel-bouton suivant">&#10095;</button>   <!-- Flèche droite -->
</section>

<!-- ---------------------------------- AJOUT ACTEURS --------------------------- -->
<section id="carrousel-acteurs" class="carrousel">

    <div class="title">
        <div class="ligneAcceuil"> </div>
        <h2> <a href="index.php?action=listActeur"> ACTEURS </a> </h2>
    </div>

    <button class="carrousel-bouton precedent" aria-label="Précédent">&#10094;</button>

    <div class="carrousel-conteneur">
        <div class="carrousel-diapositive">
            <ul class="liste-acteurs">
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=4">
                        <div class="image-acteur">
                            <img src="public/images/braga.jpg" alt="Sonia Braga">
                        </div>
                        <p>Sonia Braga</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=5">
                        <img src="public/images/andrea.jpg" alt="Andrea Arcangeli">
                        <p>Andrea Arcangeli</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=6">
                        <img src="public/images/maria.jpg" alt="Maria Caballero">
                        <p>Maria Caballero</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=7">
                        <img src="public/images/gosling.jpg" alt="Ryan Gosling">
                        <p>Ryan Gosling</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="carrousel-diapositive">
            <ul class="liste-acteurs">
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=17">
                        <img src="public/images/samuelJ.jpg" alt="Samuel Jackson">
                        <p>Samuel Jackson</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=32">
                        <img src="public/images/pacino.jpg" alt="Al Pacino">
                        <p>Al Pacino</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=22">
                        <img src="public/images/ledger.jpg" alt="Heath Ledger">
                        <p>Heath Ledger</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=23">
                        <img src="public/images/caine.jpg" alt="Michael Caine">
                        <p>Michael Caine</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="carrousel-diapositive">
            <ul class="liste-acteurs">
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=26">
                        <img src="public/images/hanks.jpg" alt="Tom Hanks">
                        <p>Tom Hanks</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=33">
                        <img src="public/images/caan.jpg" alt="James Caan">
                        <p>James Caan</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=16">
                        <img src="public/images/travolta.jpg" alt="John Travolta">
                        <p>John Travolta</p>
                    </a>
                </li>
                <li class="acteur">
                    <a href="index.php?action=detailActeur&id=8">
                        <img src="public/images/emmaStone.jpg" alt="Emma Stone">
                        <p>Emma Stone</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <button class="carrousel-bouton suivant" aria-label="Suivant">&#10095;</button>
</section>
<br>
    <!-- ------------------- SECTION CITATION part 2 -->
        <section id="citation2">
            <p> “ Le cinéma, c&rsquo;est l&rsquo;écriture moderne dont l&rsquo;encre est la lumière. “</p>
            <p> Jean Cocteau </p>
        </section>

    <!-- ------------------- SECTION REALISATEUR --------------- -->
    <br>
    <br>
    <section id="carrousel-realisateurs" class="carrousel">

    <div class="title">
        <div class="ligneAcceuil"> </div>
        <h2> <a href="index.php?action=listRealisateur"> REALISATEURS </a> </h2>
    </div>

    <button class="carrousel-bouton precedent" aria-label="Précédent">&#10094;</button>

    <div class="carrousel-conteneur">
        <div class="carrousel-diapositive">
            <ul class="liste-realisateurs">
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=1">
                        <img src="public/images/christopherNolan.jpg" alt="nolan">
                        <p>Christopher Nolan</p>
                    </a>
                </li>
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=6">
                        <img src="public/images/chazelleDamien.jpg" alt="chazelle">
                        <p>Damien Chazelle</p>
                    </a>
                </li>
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=8">
                        <img src="public/images/daramontFrank.jpg" alt="daramont">
                        <p>Frank Daramont</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="carrousel-diapositive">
            <ul class="liste-realisateurs">
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=5">
                        <img src="public/images/tarantino.jpg" alt="Tarantino">
                        <p>Quentin Tarantino</p>
                    </a>
                </li>
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=7">
                        <img src="public/images/zemeckis.jpg" alt="Robert Zemeckis">
                        <p>Robert Zemeckis</p>
                    </a>
                </li>
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=9">
                        <img src="public/images/coppola.jpg" alt="coppola">
                        <p>Fracis Ford Coppola</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="carrousel-diapositive">
            <ul class="liste-realisateurs">
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=2">
                        <img src="public/images/spielberg.jpg" alt="spielberg">
                        <p>Steven Spielberg</p>
                    </a>
                </li>
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=4">
                        <img src="public/images/wachowski.jpg" alt="Wachowskis">
                        <p>The Wachowskis</p>
                    </a>
                </li>
                <li class="realisateur">
                    <a href="index.php?action=detailRealisateur&id=3">
                        <img src="public/images/stevenson.jpg" alt="stevenson">
                        <p>Arkasha Stevenson</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <button class="carrousel-bouton suivant" aria-label="Suivant">&#10095;</button>
</section>
    <script src="homePage/index.js"></script>
    <script src="homePage/film.js"></script>
    <script src="homePage/acteur.js"></script>
    <script src="homePage/realisateur.js"></script>
</main>

</html>

<?php

$titre = " Home ";
$titre_secondaire = "Nouveauté du moment";
$contenu = ob_get_clean();
require "view/template.php";

?>