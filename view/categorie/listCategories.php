<?php 

ob_start(); 

?>

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
                    <td> <a style="text-decoration: none;" href="index.php?action=detailCategorie&id=<?= $categorie["id_genreCine"]?>"> <?= $categorie["nom_genreCine"]?></a> </td>
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