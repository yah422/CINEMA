<?php ob_start(); 

?>


<table style="background: #f1f1f1; width:700px; margin-left: 30px;">
    <thead>
        <tr>
            <th>  </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $role) {?>
                <tr>
                    <td> 
                        <a style="text-decoration: none;" href="index.php?action=detailRole&id=<?=$role["id_role"];?>"> <?= $role["nom_role"]?> </a> 
                    </td>
                    <td>
                        <a href="index.php?action=supprimeRole&id=<?=$role["id_role"];?>">
                            <input id="ii" class="form-control text-white text-center" type="submit" name="submit" value="Supprimer">
                        </a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>
<br>
<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutRole"><input id="i" class="form-control text-white text-center" type="submit" name="submit" value="Ajouter un rôle"> 
</p>


<?php

$titre = "Rôles";
$titre_secondaire = "Liste des Rôles";
$contenu = ob_get_clean();
require "view/template.php";

?>