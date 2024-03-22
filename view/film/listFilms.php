<?php ob_start(); ?>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> TITRE FILM </th>
            <th> ANNEE SORTIE </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $film) {?>
                <tr>
                    <td> <a style="text-decoration: none;" href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["titre_film"]?></a> </td>
                    <td> <?= $film["anneeSortie_film"]?> </td>
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