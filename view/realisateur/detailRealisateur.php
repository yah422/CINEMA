<?php ob_start(); 

?>


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
            foreach($requeteRealisateur ->fetchAll() as $detailReal) {?>
                <tr>
                    <td> <?= $detailReal["nom_personne"]?> </td>
                    <td> <?= $detailReal["prenom_personne"]?> </td>
                    <td> <?= $detailReal["dateNaissance"]?> </td>
                    <td> <?= $detailReal["sexe_personne"]?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "Détails Réalisateur";
$titre_secondaire = "Détails Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";

?>