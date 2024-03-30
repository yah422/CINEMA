<?php 
ob_start(); 
$role = $requete->fetch();

?>

<h1><?= $role["nom_role"] ?></h1>

<table class="table table-bordered border-primary">
    <thead>
            <tr>
                <th> Titre Film </th>
                <th> Nom rôle </th>
         </tr>
     </thead>
        <tbody>
         <?php
                foreach($requeteRole ->fetchAll() as $detailRole) {?>
                    <tr>
                        <td> <?= $detailRole["titre_film"]?> </td>
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