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
                    <td> <a style="text-decoration: none;" href="index.php?action=detailActeur&id=<?= $acteur["id_acteur"]?>"> <?= $acteur["acteurs"]?> </a> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutActeur"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submitActeur" value="Ajouter un acteur"> </a>
</p>

<?php

$titre = "Acteurs";
$titre_secondaire = "Acteurs";
$contenu = ob_get_clean();
require "view/template.php";

?>