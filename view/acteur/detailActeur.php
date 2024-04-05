<?php

ob_start();

$acteur = $requeteActeur ->fetch();

?>
 
<section style="display: flex; flex-direction: column;">
    <div style="display: flex; flex-direction: row;">
        <div style="margin-left: 30px;">
            <img src='public/images/<?= $acteur["affiche_acteur"] ?>' alt='Affiche du film' style="width:250px;">
        </div>
        <div style="margin-left: 30px;">
            <p><strong><?= $acteur["acteur"] ?></strong></p>
            <p>Date de Naissance : <?= $acteur["dateNaissance"] ?></p>
            <p>Sexe : <?= $acteur["sexe_personne"] ?></p>
        </div>
    </div>
    <br>
    <br>
    <div class="title" style="margin-left: 30px;">
        <div class="ligneAcceuil"></div>
        <h2> Bibliographie <br> </h2>
        <br>
        <p style="text-align:justify; width:90%;"><?= $acteur["bibliographie_acteur"] ?></p>
    </div>
    <br>
    <br>
    <div class="title" style="margin-left: 30px;">
        <div class="ligneAcceuil"></div>
        <h2> Filmographie <br> </h2>
        <br>
    </div>
    <div style="margin-left: 30px;">
        <table class="table-responsive" style="width: 600px;">
            <thead>
                <tr>
                    <th>Affiche Film</th>
                    <th>Titre film</th>
                    <th>Rôle</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requeteFilmActeur->fetchAll() as $detailActeur) {?>
                    <tr>
                        <td><a style="text-decoration: none;" href="index.php?action=detailFilm&id=<?= $detailActeur["id_film"] ?>"><img src='public/images/<?= $detailActeur["affiche_film"] ?>' alt='Affiche du film'></a></td>
                        <td><a style="text-decoration: none;" href="index.php?action=detailFilm&id=<?= $detailActeur["id_film"] ?>"><?= $detailActeur["titre_film"] ?></a></td>
                        <td><a style="text-decoration: none;" href="index.php?action=detailRole&id=<?= $detailActeur["id_role"] ?>"><?= $detailActeur["nom_role"] ?></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
    </div>
</section>
 
<?php
 
$titre = "Détails Acteurs";
$titre_secondaire = "Détails Acteurs";
$contenu = ob_get_clean();
require "view/template.php";
?>