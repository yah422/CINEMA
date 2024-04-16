<?php ob_start(); ?>

<table style="background: transparent;">
    <thead>
        <tr >
            <th> </th>
            <th> </th>
            <th> </th>

        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete ->fetchAll() as $film) {?>
                <tr>
                    <td> <a style="text-decoration: none;" href="index.php?action=detailFilm&id=<?= $film["id_film"]?>"><?= $film["titre_film"]?></a> </td>
                    <td> <?= $film["anneeSortie_film"]?> </td>
                    <td>
                        <a href="index.php?action=supprimeFilm&id=<?= $film["id_film"]?>">
                            <input id="ii"  class="form-control text-white text-center" type="submit" name="submit" value="Supprimer" >
                        </a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>
<br>
<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutFilm"><input id="i"  class="form-control text-white text-center" type="submit" name="submit" value="Ajouter film"> 
</p>
<?php

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
require "view/template.php";

?>