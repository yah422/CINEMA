<?php 
ob_start();

// Récupération des détails du film
$film = $requeteFilm->fetch();

// Récupération du synopsis du film
$syno = $requeteFilmS->fetch();
?>

<section style="width:100%;">
    <div id="wrapper" style="border-radius: 0px;">
        <div>
            <img src='<?= $film["affiche_film"] ?>' alt='Affiche du film'>
        </div>

        <div>
            <p>Titre Film : <?= $film["titre_film"] ?></p>
            <p>Durée : <?= $film["duree_formatee"] ?></p>
            <p>Année de parution : <?= $film["anneeSortie_film"] ?></p>

            <?php if ($requeteG->fetch()) { ?>
                <a href="index.php?action=detailCategorie&id=<?= $requeteG->fetch()["id_genreCine"] ?>">
                    <p>Catégorie : <?= $genre["nom_genreCine"] ?></p>
                </a>
            <?php } ?>

            <a href="index.php?action=detailRealisateur&id=<?= $film["id_realisateur"] ?>">
                <p>Réalisateur : <?= $film["realisateurName"] ?></p>
            </a>

            <div id="note">Note : <?= $film["note_film"] ?></div>
        </div> 
    </div>

    <div id="wrap">
        <div class="parts">
            <div class="ligneAcceuil"></div>
            <h2>SYNOPSIS</h2>
        </div>

        <div class="title">
            <p><?= $syno["synopsis_film"] ?></p>
        </div>

        <div class="parts">
            <div class="ligneAcceuil"></div>
            <h2>CASTING</h2>
        </div>

        <div class="title">
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th></th>
                        <th>Acteur</th>
                        <th>Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($requeteCast->fetchAll() as $detailCast) { ?>
                        <tr> 
                            <td>
                                <a href="index.php?action=detailActeur&id=<?= $detailCast["id_acteur"] ?>">
                                    <img src='public/images/<?= $detailCast["affiche_acteur"] ?>' alt='Affiche de l'acteur'>
                                </a>
                            </td>
                            <td>
                                <a href="index.php?action=detailActeur&id=<?= $detailCast["id_acteur"] ?>"><?= $detailCast["acteurName"] ?></a>
                            </td> 
                            <td>
                                <a href="index.php?action=detailActeur&id=<?= $detailCast["id_role"] ?>"><?= $detailCast["nom_role"] ?></a>
                            </td>
                        </tr> 
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php
$titre = "Détails Films";
$titre_secondaire = "Détails Films";
$contenu = ob_get_clean();
require "view/template.php";
?>
