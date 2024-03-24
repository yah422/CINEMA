<?php 
ob_start(); 

?>


<form action="index.php?action=ajoutFilm" method="post" enctype="multipart/form-data">
    <p  class="px-2">
        <label>
            Titre du film : <br>
            <input id="" class="border-1" name="titre_film" type="text">
            <br>
        </label>
    </p>
    <p class="px-2">
        <label>
            Durée du film : <br>
            <input id="" class="border-1" name="duree_formatee" type="text">
            
        </label>
    </p>
    <p class="px-2">
        <label>
            Année de parution : <br>
            <input id="" class="border-1" name="anneeSortie_film" type="text">
           
        </label>
    </p>
    <p class="px-2">
        <label>
            Synopsis : <br>
            <input id="" class="border-1" name="synopsis_film" type="text">
            
        </label>
    </p>
    <p class="px-2">
        <label>
            Réalisateur: <br>
            <input id="" class="border-1" name="realisateurName" type="text">
           
        </label>
    </p>
    <p class="px-2">
        <label>
            Note: <br>
            <input id="" class="border-1" name="note_film" type="text">
           
        </label>
    </p>
    <p class="px-2">
        <label>
            Affiche du film: <br>
            <input id="" class="border-1" name="affiche_film" type="text">
            
        </label>
    </p>

    <p class="px-2" style="width: 200px">
        <a href="controller/FilmController.php"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Ajouter le film"></a>    
    </p>
    
</form>

<div class="messages">
    <?php
        if (isset($_SESSION["message"])) {
            echo "<p>" . $_SESSION["message"] . "</p>";
            unset($_SESSION["message"]); // Supprimer le message de la session
        }
    ?>
</div>




<?php

$titre = "Ajout Film";
$titre_secondaire = "Ajout Film";
$contenu = ob_get_clean();
require "view/template.php";

?>