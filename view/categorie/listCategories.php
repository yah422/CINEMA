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

<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutCategorie"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Ajouter une catégorie"> 
</p>

<?php

$titre = "Catégories";
$titre_secondaire = "Catégories";
$contenu = ob_get_clean();
require "view/template.php";

?>