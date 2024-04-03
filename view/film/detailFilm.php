<?php
ob_start(); 

$detailFilm = $requeteFilm ->fetch();

?>

<section>

    <div>
        <img src='public/images/<?= $detailFilm["affiche_film"]?>' alt='Affiche du film' style="width:250px;">
    </div>

    <div>
        <p> Titre Film : <?= $detailFilm["titre_film"]?></p>
        <p> Durée : <?= $detailFilm["duree_formatee"]?></p>
        <p> Année de parution : <?= $detailFilm["anneeSortie_film"]?></p>
        <p> Note : <?= $detailFilm["note_film"]?></p>
    </div>

    <div class="title" style="margin-left: 30px;">
        <div class="ligneAcceuil"> </div>
        <h2> Synopsis :<br>  </h2>
        <p>  <?= $detailFilm["synopsis_film"]?></p>
    </div>

    <table class="table-responsive" style="width: 600px; margin-left: 30px;">
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