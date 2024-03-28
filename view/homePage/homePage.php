<?php 
ob_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/home-style.css">
</head>
<main>
<!-- ------------------------------ AFFICHE NOUVEAUTE ------------------------------ -->
        <ul>
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
        </ul>
        
<!-- ---------------------------- SECTION CITATION ------------------------------ -->
        <section id="citation">
            <p> “ La vraie séduction de l&rsquo;acteur, c&rsquo;est de faire admettre au public qu&rsquo;il est vraiment le personnage. “</p>
            <p> Bernard GIRAUDEAU </p>
        </section>
<!-- ------------------------------ AJOUT SECTION A LA UNE ----------------------- -->
        <section id="alaUne">
            <div class="ligneAcceuil"> </div>
            <h2> A LA UNE </h2>
            <ul>
                <li>
                    <a href="index.php?action=detailFilm&id=2">
                        <img src="public/images/lalalandAffiche.jpg" alt="lalalandAffiche">
                        <p class="movies"> Lalaland </p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=2">
                        <p class="directors"> Steven Spielberg </p>
                    </a>
                    
                </li>
                <li>
                    <a href="index.php?action=detailFilm&id=4">
                        <img src="public/images/pulpFiction.jpg" alt="affiche_pulpfiction">
                        <p class="movies"> Pulp Fiction </p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=4">
                        <p class="directors"> The Wachowskis </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailFilm&id=12">
                        <img src="public/images/malediction.jpg" alt="affiche_malediction">
                        <p class="movies"> Malédiction : l'Origine</p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=9">
                        <p class="directors"> Stevenson Arkasha</p>
                    </a>
                </li>
            </ul>

        </section>
<!-- --------------------------------- AJOUT FILMS ----------------------------- -->
        <section id="films">
        <div class="ligneAcceuil"> </div>
        <h2> <a href="index.php?action=listFilm">FILM</a> </h2>

        <ul>
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
                <a href="index.php?action=detailFilm&id=6">
                    <img src="public/images/forest.jpg" alt="affiche_forestGump">
                    <p class="movies"> Forrest Gump </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=5">
                    <p class="directors"> Quentin Tarantino </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=7">
                    <img src="public/images/thegodfather.jpg" alt="affiche_godfather">
                    <p class="movies"> The GodFather </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=6">
                    <p class="directors"> Damien Gazelle </p>
                </a>
            </li>
        </ul>
        <ul>
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
                <a href="index.php?action=detailFilm&id=2">
                    <img src="public/images/lalalandAffiche.jpg" alt="lalalandAffiche">
                    <p class="movies"> Lalaland </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=2">
                    <p class="directors"> Steven Spielberg </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=4">
                    <img src="public/images/pulpFiction.jpg" alt="affiche_pulpfiction">
                    <p class="movies"> Pulp Fiction </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=4">
                    <p class="directors"> The Wachowskis </p>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="index.php?action=detailFilm&id=12">
                    <img src="public/images/malediction.jpg" alt="affiche_malediction">
                    <p class="movies"> Malédiction : l'Origine</p>
                </a>
                <a href="index.php?action=detailRealisateur&id=9">
                    <p class="directors"> Stevenson Arkasha</p>
                </a>
            </li>
        </ul>
        </section>
<!-- ---------------------------------- AJOUT ACTEURS --------------------------- -->
        <section id="acteur">
            <div class="ligneAcceuil"> </div>
            <h2> <a href="index.php?action=listActeur">ACTEURS</a> </h2>

            <ul  class="actorsphoto">
                <li>
                    <a href="index.php?action=detailActeur&id=4">
                        <img src="public/images/braga.jpg" alt="Sonia Braga">
                        <p> Sonia Braga </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailActeur&id=5">
                        <img src="public/images/andrea.jpg" alt="Andrea Arcangeli">
                        <p> Andrea Arcangeli </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailActeur&id=6">
                        <img src="public/images/maria.jpg" alt="Maria Cabarello">
                        <p> Maria Caballero </p>
                    </a>
                </li>
            </ul>
            <ul class="actorsphoto">
                <li>
                    <a href="index.php?action=detailActeur&id=7">
                        <img src="public/images/gosling.jpg" alt="Ryan Gosling">
                        <p> Ryan Gosling </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailActeur&id=17">
                        <img src="public/images/samuelJ.jpg" alt="samuel">
                        <p>  Samuel Jackson </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailActeur&id=32">
                        <img src="public/images/pacino.jpg" alt="Pacino">
                        <p> Al Pacino </p>
                    </a>
                </li>

            </ul>
               
            <ul class="actorsphoto">
                
                <li>
                    <a href="index.php?action=detailActeur&id=22">
                        <img src="public/images/ledger.jpg" alt="ledger">
                        <p> Heath Ledger </p>
                    </a>
                </li> 
                <li>
                    <a href="index.php?action=detailActeur&id=23">
                        <img src="public/images/caine.jpg" alt="Caine">
                        <p> Michael Caine </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailActeur&id=26">
                        <img src="public/images/hanks.jpg" alt="Hanks">
                        <p> Tom Hanks </p>
                    </a>
                </li>
            </ul>
            
            <ul class="actorsphoto">
                
                <li>
                    <a href="index.php?action=detailActeur&id=33">
                        <img src="public/images/caan.jpg" alt="Caan">
                        <p> James Caan </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailActeur&id=16">
                        <img src="public/images/travolta.jpg" alt="Travolta">
                        <p> John Travolta</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailActeur&id=8">
                        <img src="public/images/emmaStone.jpg" alt="Emma Stone">
                        <p> Emma Stone </p>
                    </a>
                </li>
            </ul>

            <ul class="actorsphoto">
                <li>
                    <a href="index.php?action=detailActeur&id=18">
                        <img src="public/images/thurman.jpg" alt="Thurman">
                        <p> Uma Thurman </p>
                    </a>
                </li>
            </ul>
        </section>

    <!-- ------------------- SECTION CITATION part 2 -->
        <section id="citation2">
            <p> “ Le cinéma, c&rsquo;est l&rsquo;écriture moderne dont l&rsquo;encre est la lumière. “</p>
            <p> Jean Cocteau </p>
        </section>

    <!-- ------------------- SECTION REALISATEUR --------------- -->
    <section id="real">
        <div class="ligneAcceuil"> </div>
        <h2> <a href="index.php?action=listRealisateur">REALISATEURS </a></h2>

    </section>
</main>


</html>

<?php

$titre = " Home ";
$titre_secondaire = "Nouveauté du moment";
$contenu = ob_get_clean();
require "view/template.php";

?>