<?php
ob_start(); 

$detailFilm = $requeteFilm ->fetch();

?>

<section>

    <div><img src='public/images/<?= $detailFilm["affiche_film"]?>' alt='Affiche du film'></div>


    <p> Titre Film : <?= $detailFilm["titre_film"]?></p>
    <p> Durée : <?= $detailFilm["duree_formatee"]?></p>
    <p> Année de parution : <?= $detailFilm["anneeSortie_film"]?></p>
    <p> Synopsis : <?= $detailFilm["synopsis_film"]?></p>
    <p> Note : <?= $detailFilm["note_film"]?></p>


    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th> Acteurs</th>
                <th> Sexe </th>
            </tr>
        </thead>
        <tbody>
            <?php   
            
                foreach($requeteCast ->fetchAll() as $detailCast) {?>
                    <tr> 
                        <td> <?= $detailCast["acteurName"]?> </td> 
                        <td> <?= $detailCast["sexe_personne"]?> </td>
                    </tr> 
            <?php } ?>
        </tbody>
    </table>


</section>



<?php

$titre = "Détails Films";
$titre_secondaire = "Détails Films";
$contenu = ob_get_clean();
require "view/template.php";

?>