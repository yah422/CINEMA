<?php 
ob_start(); 
$detailReal = $requete->fetch();
$hasReal = (count($detailReal) > 0 ) ? True : False ;

?>
<section id="realisa">
    <div id="infoReal">
    <!-- inserer photo du réalisateur  -->
        <div>
            <img src='public/images/<?= $detailReal["affiche_acteur"]?>' alt='Affiche real'>
        </div>
        <!--  afficher les infos des reals -->
        <div style="margin-left: 30px; font-size: larger;">
            <p>Réalisateur : <?= $detailReal["reali"] ?></p>
            <p>Date de Naissance : <?= $detailReal["dateNaissance"] ?> </p> 
            <p>Sexe : <?= $detailReal["sexe_personne"] ?></p>
            <br>

            <div id="carriere" > <?= $detailReal["carriere_personne"]?> ans de carrière</div>

        </div>
    </div>

    <div id="wrap">
        <div class="partsReal">
            <div class="ligneAcceuil"> </div>
            <h2> Bibliographie <br>  </h2>
        </div>

        <div class="titleReal">
            <p style="text-align:justify;">  <?= $detailReal["bibliographie_acteur"]?></p>
        </div>


        <?php if ($hasReal) {  ?>

        <div class="partsReal">
            <div class="ligneAcceuil"> </div>
            <h2> Filmographie <br>  </h2>
        </div>
        
        <div class="titleReal">
            <table class="table-responsive" style="width: 600px;">
            <tbody id="tbody">
                <?php   
                
                    foreach($requeteRealisateur->fetchAll() as $filmo) {?>
                        <tr> 
                            <td> <a href="index.php?action=detailFilm&id=<?= $filmo["id_film"]?>"><img id="filmAffiche" src='<?= $filmo["affiche_film"] ?>' alt='Affiche du film'></a> </td> &nbsp;
                            <td> <a href="index.php?action=detailFilm&id=<?= $filmo["id_film"]?>"><?= $filmo["titre_film"]?></a> </td> &nbsp;
                            <td> <?= $filmo["anneeSortie_film"]?> </td>&nbsp;
                        </tr> 

                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
    <?php } ?>
    <br>

</section>

<?php
$titre = "Détails Réalisateur";
$titre_secondaire = "Détails Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";
?>
