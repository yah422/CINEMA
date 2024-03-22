<?php ob_start(); 

?>


<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Rôle </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $role) {?>
                <tr>
                    <td> <a style="text-decoration: none;" href="index.php?action=detailRole&id=<?=$role["id_role"];?>"> <?= $role["nom_role"]?> </a> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutRole"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Ajouter un rôle"> 
</p>


<?php

$titre = "Rôles";
$titre_secondaire = "Rôles";
$contenu = ob_get_clean();
require "view/template.php";

?>