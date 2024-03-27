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
        <ul>
            <li>
                <a href="index.php?action=detailFilm&id=5">
                    <img src="public/images/darkaffiche.jpg" alt="affiche_dark"> 
                    <p>The Dark Knight </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=1">
                    <p> Chritopher Nolan </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=6">
                    <img src="public/images/forest.jpg" alt="affiche_forestGump">
                    <p> Forrest Gump </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=5">
                    <p> Quentin Tarantino </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=7">
                    <img src="public/images/thegodfather.jpg" alt="affiche_godfather">
                    <p> The GodFather </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=6">
                    <p> Damien Gazelle </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=1">
                    <img src="public/images/afficheInception.jpg" alt="affiche_inception">
                    <p> Inception </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=1">
                    <p> Christopher Nolan </p>
                </a>
            </li>
        </ul>

        <section id="citation">
            <p> “ La vraie séduction de l&rsquo;acteur, c&rsquo;est de faire admettre au public qu&rsquo;il est vraiment le personnage. “</p>
            <p> Bernard GIRAUDEAU </p>
        </section>

        <section id="alaUne">
            <div class="ligneAcceuil"> </div>
            <h2> A LA UNE </h2>
            <ul>
                <li>
                    <a href="index.php?action=detailFilm&id=2">
                        <img src="public/images/lalalandAffiche.jpg" alt="lalalandAffiche">
                        <p> Lalaland </p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=2">
                        <p> Steven Spielberg </p>
                    </a>
                    
                </li>
                <li>
                    <a href="index.php?action=detailFilm&id=4">
                        <img src="public/images/pulpFiction.jpg" alt="affiche_pulpfiction">
                        <p> Pulp Fiction </p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=4">
                        <p> The Wachowskis </p>
                    </a>
                </li>
                <li>
                    <a href="index.php?action=detailFilm&id=12">
                        <img src="public/images/malediction.jpg" alt="affiche_malediction">
                        <p> Malédiction : l'Origine</p>
                    </a>
                    <a href="index.php?action=detailRealisateur&id=9">
                        <p> Stevenson Arkasha</p>
                    </a>
                </li>
            </ul>

        </section>

        <section id="films">
        <div class="ligneAcceuil"> </div>
        <h2> Films </h2>

        <ul>
            <li>
                <a href="index.php?action=detailFilm&id=5">
                    <img src="public/images/darkaffiche.jpg" alt="affiche_dark"> 
                    <p>The Dark Knight </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=1">
                    <p> Chritopher Nolan </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=6">
                    <img src="public/images/forest.jpg" alt="affiche_forestGump">
                    <p> Forrest Gump </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=5">
                    <p> Quentin Tarantino </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=7">
                    <img src="public/images/thegodfather.jpg" alt="affiche_godfather">
                    <p> The GodFather </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=6">
                    <p> Damien Gazelle </p>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="index.php?action=detailFilm&id=1">
                    <img src="public/images/afficheInception.jpg" alt="affiche_inception">
                    <p> Inception </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=1">
                    <p> Christopher Nolan </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=2">
                    <img src="public/images/lalalandAffiche.jpg" alt="lalalandAffiche">
                    <p> Lalaland </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=2">
                    <p> Steven Spielberg </p>
                </a>
            </li>
            <li>
                <a href="index.php?action=detailFilm&id=4">
                    <img src="public/images/pulpFiction.jpg" alt="affiche_pulpfiction">
                    <p> Pulp Fiction </p>
                </a>
                <a href="index.php?action=detailRealisateur&id=4">
                    <p> The Wachowskis </p>
                </a>
            </li>
        </ul>
        <ul>
        <li>
            <a href="index.php?action=detailFilm&id=12">
                <img src="public/images/malediction.jpg" alt="affiche_malediction">
                <p> Malédiction : l'Origine</p>
            </a>
            <a href="index.php?action=detailRealisateur&id=9">
                <p> Stevenson Arkasha</p>
            </a>
        </li>
        </ul>
        </section>

</html>

<?php

$titre = " Home ";
$titre_secondaire = "Nouveauté du moment";
$contenu = ob_get_clean();
require "view/template.php";

?>