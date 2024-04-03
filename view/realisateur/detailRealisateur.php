<?php 
ob_start(); 
$detailReal = $requeteRealisateur->fetch();
?>
<section>
    <!-- inserer photo du réalisateur  -->
    <div style=" margin-left: 30px;">
        <img src='public/images/<?= $detailReal["affiche_acteur"]?>' alt='Affiche real' style="width:250px;">
    </div>
    <!--  afficher les infos des reals -->
    <div style=" margin-left: 30px;">
        <p>Réalisateur : <?= $detailReal["reali"] ?></p>
        <p>Date de Naissance : <?= $detailReal["dateNaissance"] ?> </p> 
        <p>Sexe : <?= $detailReal["sexe_personne"] ?></p>
    </div>

    <div class="title" style="margin-left: 30px;">
        <div class="ligneAcceuil"> </div>
        <h2> Bibliographie : <br>  </h2>
        <p style="text-align:justify;">  <?= $detailReal["bibliographie_acteur"]?></p>
    </div>

    <div class="title" style="margin-left: 30px;">
        <div class="ligneAcceuil"> </div>
        <h2> Filmographie : <br>  </h2>

        <table class="table-responsive" style="width: 600px; margin-left: 30px;">
        <tbody>
            <?php   
            
                foreach($requeteRealisateur->fetchAll() as $filmo) {?>
                    <tr> 
                        <td> <img src='public/images/<?= $filmo["affiche_film"]?>' alt='Affiche du film'> </td>
                        <td> <?= $filmo["titre_film"]?> </td> 
                    </tr> 

            <?php } ?>
        </tbody>
    </table>
    </div>

</section>

<?php
$titre = "Détails Réalisateur";
$titre_secondaire = "Détails Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";
?>
