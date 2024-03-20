<?php 
ob_start();

$acteurs = $requete -> fetchAll();

?>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Acteurs </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($acteurs as $acteur) {?>
                <tr>
                    <td> <a href="index.php?action=detailActeur&id=<?= $acteur["id_acteur"]?>"> <?= $acteur["acteurs"]?> </a> </td>
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