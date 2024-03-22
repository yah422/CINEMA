<?php ob_start(); ?>

<table style="display: flex;
flex-direction: column;
align-content: center;
justify-content: center;
align-items: center;
gap: 50px;" class="uk-table uk-table-striped">
    <thead>
        <tr >
            <th> TITRE FILM </th>
            <th> ANNEE SORTIE </th>
        </tr>
    </thead>
    <tbody style="display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 20px;">
        <?php
            foreach($requete ->fetchAll() as $film) {?>
                <tr style="display: flex;
        gap: 100px;">
                    <td> <a style="text-decoration: none;" href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["titre_film"]?></a> </td>
                    <td> <?= $film["anneeSortie_film"]?> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>
<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutFilm"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Ajouter un film"> 
</p>
<?php

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";

?>