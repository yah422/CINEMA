<?php 
ob_start(); 
$details = $requeteCategorie ->fetch();

?>
<section id="categorie">
    
    <div style="    gap: 15px;
    width: 80%;
    height: 500px;
    text-align: left;
    border-radius: 15px;
    background-color: black;
    color: #bd7d07;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    flex-direction: column;
    margin-left: 200px;">

        <p style="color: #bd7d07"> Genre Cinématographique : <a style="text-decoration: none; color: #bd7d07;" href="index.php?action=detailCategorie&id=<?= $details["id_genreCine"]?>"><?= $details["nom_genreCine"]?></a></p>
        <p style="color: #bd7d07"> Titre film : <a style="text-decoration: none; color: #bd7d07;" href="index.php?action=detailFilm&id=<?= $details["id_film"]?>"><?= $details["titre_film"]?></a></p>
        <p style="color: #bd7d07"> Réalisateur : <a style="text-decoration: none; color: #bd7d07;" href="index.php?action=detailRealisateur&id=<?= $details["id_realisateur"] ?>">  <?= $details["realisateurName"]?></a></p>
        <p style="color: #bd7d07"> Note Film : <?= $details["note_film"]?></p>
    </div>

    <div style="width: 80%;
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;">
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