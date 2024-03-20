<?php ob_start(); ?>

<p class="uk-label uk-label-warning"> Il y a <?= $requete ->rowCount() ?> </p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Catégorie </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $categorie) {?>
                <tr>
                    <td> <a href="index.php?action=detailCategorie"><?= $categorie["nom_genreCine"]?></a> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>



<?php

$titre = "Catégories";
$titre_secondaire = "Catégories";
$contenu = ob_get_clean();
require "view/template.php";

?>