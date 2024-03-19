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
            foreach($requete ->fetchAll() as $realisateur) {?>
                <tr>
                    <td> <?= $realisateur["nom_personne"]?> </td>
                    <td> <?= $realisateur["prenom_personne"]?> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>



<?php

$titre = "Réalisateurs";
$titre_secondaire = "Réalisateurs";
$contenu = ob_get_clean();
require "view/template.php";

?>