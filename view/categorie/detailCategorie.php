<?php 
ob_start(); 
$name = $requeteCategorie->fetch();
?>

<section id="categorie">

    <h4> <?= $name["nom_genreCine"]?> </h4>

        <table  class="table-responsive" style="width: 100%; height: auto;">
            <thead>
                <tr>
                    <th> </th>
                    <th> </th>
                </tr>
            </thead>
            <br>
            <tbody>
                <?php foreach($requete->fetchAll() as $detail) : ?>
                    <tr>
                        <td>
                            <a href="index.php?action=detailFilm&id=<?= $detail["id_film"] ?>">
                                <img style="width: 200px;" src='public/images/<?= $detail["affiche_film"]?>' alt='Affiche acteur'>
                            </a>
                        </td>

                        <td> <a style="text-decoration: none; color: #bd7d07;" href="index.php?action=detailCategorie&id=<?= $detail["id_genreCine"]?>">
                    <?= $detail["nom_genreCine"]?> </a> </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <br>
</section>

<?php

$titre = "Détails Catégorie";
$titre_secondaire = "Détails Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>
