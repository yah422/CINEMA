<?php ob_start(); ?>

<table  style="background: #f1f1f1; width:700px; margin-left: 30px;" >
    <thead>
        <tr >
            <th> TITRE FILM </th>
            <th> </th>

        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $film) {?>
                <tr>
                    <td> <a style="text-decoration: none;" href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["titre_film"]?></a> </td>
                    <td>
                        <a href="index.php?action=supprimeFilm&id=<?= $film["id_film"]?>">
                            <input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Supprimer">
                        </a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>
<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutFilm"><input id="i" style="margin-left: 30px;" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Ajouter un film"> 
</p>
<?php

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";

?>