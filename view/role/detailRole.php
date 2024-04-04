<?php 
ob_start(); 
$role = $requeteActRole->fetch();

?>
<section>
    <h1><?= $role["nom_role"] ?></h1>

    <div style="margin-left: 30px;" ><td> <img src='public/images/<?= $role["affiche_acteur"]?>' alt='Affiche acteur'> </td></div>

    <div>
        <p> Titre Film : <?= $role["titre_film"]?></p>
        <p> Nom acteur : <?= $role["acteure"]?></p>
        <p> Nom rôle : <?= $role["nom_role"]?></p>
    </div>

         
        

</section>
<?php

$titre = "Détails Rôle";
$titre_secondaire = "Détails Rôle";
$contenu = ob_get_clean();
require "view/template.php";

?>