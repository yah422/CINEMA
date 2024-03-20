<?php 
ob_start(); 
$role = $requete->fetch();
$roleAffichage = $requete ->fetchAll();

?>

<h1><?= $role["nom_role"] ?></h1>
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