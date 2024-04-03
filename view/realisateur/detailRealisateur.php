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
</section>

<?php
$titre = "Détails Réalisateur";
$titre_secondaire = "Détails Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";
?>
