<?php ob_start(); ?>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Réalisateur </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($requete ->fetch() as $realisateur) {?>
                <tr>
                    <td> <a href="index.php?action=detailRealisateur&id=<?= $requete["id_realisateur"] ?>"> <?= $realisateur["nom_personne"] ?></a>  </td>
                    <td> <a href="index.php?action=detailRealisateur&id=<?= $requete["id_realisateur"]?>"> <?= $realisateur["prenom_personne"] ?> </a></td>
                </tr>
        <?php } ?>
    </tbody>
</table>



<?php

$titre = "Réalisateurs";
$titre_secondaire = "Réalisateurs";
$contenu = ob_get_clean();
require "view/template.php";

?>