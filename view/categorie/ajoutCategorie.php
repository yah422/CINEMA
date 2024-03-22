<?php 
ob_start(); 

?>

<form action="index.php?action=ajoutCategorie" method="post" enctype="multipart/form-data">
    <p>
        <label>
            Nom catégorie : <br>
            <input id="" class="border-0" name="catégorie" type="text">
        </label>
    </p>

    <p class="p-4">
        <input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" href="CategorieController.php" value="Ajouter Catégorie">    
    </p>
    
</form>







<?php

$titre = "Ajout Catégorie";
$titre_secondaire = "Ajout Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>