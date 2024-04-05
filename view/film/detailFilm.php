<?php
ob_start(); 

$detailFilm = $requeteFilm ->fetch();

?>

<section>
    <div id="wrapper">
        <div style=" margin-left: 30px;">
            <img src='public/images/<?= $detailFilm["affiche_film"]?>' alt='Affiche du film' style="width:250px;">
        </div>

        <div style=" margin-left: 30px;">
            <p> Titre Film : <?= $detailFilm["titre_film"]?></p>
            <p> Durée : <?= $detailFilm["duree_formatee"]?></p>
            <p> Année de parution : <?= $detailFilm["anneeSortie_film"]?></p>
            <p> Réalisateur : <?= $detailFilm["realisateurName"]?> </p>
            
            <br>

            <div id="note" > Note : <?= $detailFilm["note_film"]?></div>
        </div>
    </div>

    <br>
    <br>

    <div class="title" style="margin-left: 30px;">
        <div class="ligneAcceuil"> </div>
        <h2> SYNOPSIS <br>  </h2>
        <p style="text-align:justify;">  <?= $detailFilm["synopsis_film"]?></p>
    </div>

    <br>

    <div class="title" style="margin-left: 30px;">
        <div class="ligneAcceuil"> </div>
        <h2> CASTING <br>  </h2>
    </div>

    <br>

    <table class="table-responsive" style="width: 600px; margin-left: 30px;">
        <thead>
            <tr>
                <th> </th>
                <th> Acteur </th>
                <th> Rôle </th>
            </tr>
        </thead>
        <tbody>
            <?php   
            
                foreach($requeteCast ->fetchAll() as $detailCast) {?>
                    <tr> 
                        <td> <img src='public/images/<?= $detailCast["affiche_acteur"]?>' alt='Affiche du film'> </td>
                        <td> <?= $detailCast["acteurName"]?> </td> 
                        <td> <?= $detailCast["nom_role"]?> </td>
                    </tr> 

            <?php } ?>
        </tbody>
    </table>
    <br>


</section>



<?php

$titre = "Détails Films";
$titre_secondaire = "Détails Films";
$contenu = ob_get_clean();
require "view/template.php";

?>