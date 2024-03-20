<?php ob_start(); ?>

<p class="uk-label uk-label-warning"> Il y a <?= $requete ->rowCount() ?> </p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Rôle </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $detailRole) {?>
                <tr>
                    <td> <?= $detailRole["nom_role"]?> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>



<?php

$titre = "Détails Rôle";
$titre_secondaire = "Détails Rôle";
$contenu = ob_get_clean();
require "view/template.php";

?>