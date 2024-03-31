<?php 

ob_start();

 ?>

<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th> Acteur </th>
            <th> Date de Naissance </th>
            <th> Sexe </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requeteActeur ->fetchAll() as $detailAct) {?>
                <tr>
                    <td> <?= $detailAct["acteurs"]?></td>
                    <td> <?= $detailAct["dateNaissance"]?> </td>
                    <td> <?= $detailAct["sexe_personne"]?></td>
                  
                </tr>
        <?php } ?>
    </tbody>
</table>

<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th> Titre film </th>
            <th> Rôle </th>
            <th> Photo acteur</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requeteFilmActeur ->fetchAll() as $detailActeur ) {?>
                <tr>
                    <td> <?= $detailActeur["titre_film"]?></td>
                    <td> <?= $detailActeur["nom_role"]?> </td>
                    <td> <img src='public/images/<?= $detailActeur["affiche_acteur"]?>' alt='Photo acteur'> </td>

                </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "Détails Acteurs";
$titre_secondaire = "Détails Acteurs";
$contenu = ob_get_clean();
require "view/template.php";
?>