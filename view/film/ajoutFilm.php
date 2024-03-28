<?php 
ob_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/ajoutFilm.css">
</head>

<div>
    <form id="form1" action="index.php?action=ajoutFilm" method="post" enctype="multipart/form-data">
        <p  class="px-2">
            <label>Titre du film : </label><br>
            <input id="titre_film" class="border-1" name="titre_film" type="text" required>
        </p>

        <p class="px-2">
            <label>Durée du film : </label><br>
            <input id="duree_formatee" class="border-1" name="duree_film" type="number" required>
                
        </p>

        <p class="px-2">
            <label>Année de parution : </label><br>
            <input id="anneeSortie_film" class="border-1" name="anneeSortie_film" type="number" required>
            
            
        </p>

        <p class="px-2">
            <label>Synopsis : </label><br>
            <input id="synopsis_film" class="border-1" name="synopsis_film" type="text" required>
        </p>

        <p class="px-2">
            <label>Réalisateur: </label><br>
            <select id="realisateurName" class="border-1" name="id_realisateur" >
                <option value="">
                <?php
                foreach($requeteRealFilm ->fetchAll() as $realFilm) {?>
                
                    <option value="<?=$realFilm["id_realisateur"]?>"><?= $realFilm["realisateurName"]?></option>
                
                <?php }  ?>
                </option>
            </select>
        </p>

        <p>
            <label> Genre :</label>
            <?php
                foreach($requeteCateFilm ->fetchAll() as $cateFilm) {?>

                    <input type="checkbox" id="id_genreCine" value=<?=$cateFilm["id_genreCine"]?> name="nom_genreCine" >
                    <label><?= $cateFilm["nom_genreCine"]?></label>
                
                <?php }  ?>

        </p>

        <p class="px-2">
            <label>Note: </label><br>
            <input id="note_film" class="border-1" min="0" max="5" name="note_film" type="number" required>

        </p>


        <div class="btn-submit"><br>
            <input type="submit" class="submit" name="submitFilm" id="submitFilm">
        </div>

        <div class="messages">
            <?php
                if (isset($_SESSION["message"])) {
                    echo "<p>" . $_SESSION["message"] . "</p>";
                    unset($_SESSION["message"]); // Supprimer le message de la session
                }
            ?>
        </div>
    </form>

</div>

<?php

$titre = "Ajout Film";
$titre_secondaire = "Ajout Film";
$contenu = ob_get_clean();
require "view/template.php";

?>