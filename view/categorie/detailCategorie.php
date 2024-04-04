<?php 
ob_start(); 
$details = $requeteCategorie ->fetch();

?>
<section>
    
    <div  style="margin-left: 30px;">
        <p> Genre Cinématographique : <a style="text-decoration: none;" href="index.php?action=detailCategorie&id=<?= $details["id_genreCine"]?>"><?= $details["nom_genreCine"]?></a></p>
        <p> Titre film : <a style="text-decoration: none;" href="index.php?action=detailFilm&id=<?= $details["id_film"]?>"><?= $details["titre_film"]?></a></p>
        <p> Réalisateur : <a style="text-decoration: none;" href="index.php?action=detailRealisateur&id=<?= $details["id_realisateur"] ?>">  <?= $details["realisateurName"]?></a></p>
        <p> Note Film : <?= $details["note_film"]?></p>
    </div>

    <div style="margin-left: 30px;">
        <table  class="table-responsive" style="width: 600px;">
            <thead>
                <tr>
                    <th> Affiche Film </th>
                </tr>
            </thead>
            <br>
            <tbody>
                <?php
                    foreach($requete ->fetchAll() as $detail) {?>
                        <tr>
                            <td><a href="index.php?action=detailFilm&id=<?= $details["id_film"] ?>"><img style="width: 200px;" src='public/images/<?= $detail["affiche_film"]?>' alt='Affiche acteur'></a></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
</section>

<?php

$titre = "Détails Catégorie";
$titre_secondaire = "Détails Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>