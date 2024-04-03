<?php 
ob_start();

$acteurs = $requete -> fetchAll();

?>

<table style="background: #f1f1f1; width:700px; margin-left: 30px;">
    <thead>
        <tr>
            <th> Acteurs </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($acteurs as $acteur) {?>
                <tr>
                    <td> 
                        <a style="text-decoration: none;" href="index.php?action=detailActeur&id=<?= $acteur["id_acteur"]?>"> <?= $acteur["acteurs"]?> </a> 
                    </td>
                    <td>
                        <a href="index.php?action=supprimeActeur&id=<?= $acteur["id_acteur"]?>">
                            <input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Supprimer">
                        </a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutActeur"><input id="i" style="margin-left: 30px;" class="form-control bg-primary text-white text-center" type="submit" name="submitActeur" value="Ajouter un acteur"> </a>
</p>

<?php

$titre = "Acteurs";
$titre_secondaire = "Acteurs";
$contenu = ob_get_clean();
require "view/template.php";

?>