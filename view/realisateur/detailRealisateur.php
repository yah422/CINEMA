<?php 
ob_start(); 
$detailReal = $requete->fetch();
?>
<section>
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

            <div id="carriere" > <?= $detailReal["carriere_personne"]?> ans de carrière</div>

        </div>
    </div>

    <div class="parts">
        <div class="ligneAcceuil"> </div>
        <h2> Bibliographie : <br>  </h2>
    </div>

    <div class="title">
        <p style="text-align:justify;">  <?= $detailReal["bibliographie_acteur"]?></p>
    </div>

    <div class="parts">
        <div class="ligneAcceuil"> </div>
        <h2> Filmographie : <br>  </h2>
    </div>
    <div class="title">
        <table class="table-responsive" style="width: 600px; margin-left: 30px;">
        <tbody id="tbody">
            <?php   
            
                foreach($requeteRealisateur->fetchAll() as $filmo) {?>
                    <tr> 
                        <td> <img id="filmAffiche" src='public/images/<?= $filmo["affiche_film"]?>' alt='Affiche du film'> </td>
                        <td> <?= $filmo["titre_film"]?> </td> 
                    </tr> 

            <?php } ?>
        </tbody>
    </table>
    </div>
    <br>

</section>

<?php
$titre = "Détails Réalisateur";
$titre_secondaire = "Détails Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";
?>
