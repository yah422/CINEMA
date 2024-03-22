<?php 
ob_start(); 
$details = $requeteCategorie ->fetchAll();

?>


<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Genre Cinématographique </th>
            <th> Titre film</th>
            <th> Réalisateur</th>
            <th> Affiche </th>
            <th> Note Film</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($details as $detailCategorie) {?>
                <tr>
                    <td> <?= $detailCategorie["nom_genreCine"]?> </td>
                    <td> <?= $detailCategorie["titre_film"]?> </td>
                    <td> <?= $detailCategorie["realisateurName"]?> </td>
                    <td> <?= $detailCategorie["affiche_film"]?> </td>
                    <td> <?= $detailCategorie["note_film"]?> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "Détails Catégorie";
$titre_secondaire = "Détails Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>