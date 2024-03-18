<?php ob_start(); ?>

<p class="uk-label uk-label-warning"> Il y a <?= $requete ->rowCount() ?> </p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> TITRE </th>
            <th> ANNEE SORTIE </th>
            <th> SYNONPSIS </th>
            <th> AFFICHE FILM </th>
            <th> NOTE FILM </th>
            <th> DUREE FILM </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $film) {?>
                <tr>
                    <td> <?= $film["titre"]?> </td>
                    <td> <?= $film["annee_sortie"]?> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";

?>