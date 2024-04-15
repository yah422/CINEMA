<?php 
ob_start();

$film = $requeteFilm -> fetch();
$syno = $requeteFilmS -> fetch();

?>

<section>
    
        <div id="wrapper">
            <div>
                <img src='<?= $film["affiche_film"] ?>' alt='Affiche du film' style="width:250px;">
            </div>

            <div>
                <p> Titre Film : <?= $film["titre_film"] ?></p>
                <p> Durée : <?= $film["duree_formatee"] ?></p>
                <p> Année de parution : <?= $film["anneeSortie_film"] ?></p>
                <a href="index.php?action=detailRealisateur&id=<?= $film["id_realisateur"] ?>"><p> Réalisateur : <?= $film["realisateurName"] ?> </p></a>

                <br>

                <div id="note"> Note : <?= $film["note_film"] ?></div>
            </div>
        </div>
        


        <br>
        <br>

        <div id="wrap">

            <div class="parts">
                <div class="ligneAcceuil"> </div>
                <h2> SYNOPSIS <br> </h2>
            </div>

            <div class="title">
                <p style="text-align:justify;"> <?= $syno["synopsis_film"] ?></p>
            </div>
            <br>


            <div class="parts">
                <div class="ligneAcceuil"> </div>
                <h2> CASTING <br> </h2>
            </div>

            <br>
            <div class="title">
                <table class="table-responsive" style="width: 600px;">
                    <thead>
                        <tr>
                            <th> </th>
                            <th> Acteur </th>
                            <th> Rôle </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                            foreach($requeteCast->fetchAll() as $detailCast) {?>
                                <tr> 
                                    <td> <a href="index.php?action=detailActeur&id=<?= $detailCast["id_acteur"] ?>"><img src='public/images/<?= $detailCast["affiche_acteur"] ?>' alt='Affiche du film'></a> </td>
                                    <td> <a href="index.php?action=detailActeur&id=<?= $detailCast["id_acteur"] ?>"><?= $detailCast["acteurName"] ?></a> </td> 
                                    <td> <a href="index.php?action=detailActeur&id=<?= $detailCast["id_role"] ?>"><?= $detailCast["nom_role"] ?> </a></td>
                                </tr> 

                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <br>
    
</section>

<?php

$titre = "Détails Films";
$titre_secondaire = "Détails Films";
$contenu = ob_get_clean();
require "view/template.php";

?>
