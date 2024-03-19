<?php ob_start(); ?>

<p class="uk-label uk-label-warning"> Il y a <?= $requete ->rowCount() ?> </p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Nom </th>
            <th> Prénom </th>
            <th> Date de Naissance </th>
            <th> Sexe </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $detailAct) {?>
                <tr>
                    <td> <?= $detailAct["nom_personne"]?> </td>
                    <td> <?= $detailAct["prenom_personne"]?> </td>
                    <td> <?= $detailAct["dateNaissance"]?> </td>
                    <td> <?= $detailAct["sexe_personne"]?></td>
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