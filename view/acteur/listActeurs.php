<?php ob_start(); ?>

<p class="uk-label uk-label-warning"> Il y a <?= $requete ->rowCount() ?> </p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Nom </th>
            <th> Prénom </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $acteur) {?>
                <tr>
                    <td> <a href="index.php?action=detailActeur&id"> <?= $acteur["nom_personne"]?> </a> </td>
                    <td> <a href="index.php?action=detailActeur&id"> <?= $acteur["prenom_personne"]?> </a> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>



<?php

$titre = "Acteurs";
$titre_secondaire = "Acteurs";
$contenu = ob_get_clean();
require "view/template.php";

?>