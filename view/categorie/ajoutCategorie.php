<?php 
ob_start(); 

?>

<form action="index.php?action=ajoutCategorie" method="post" enctype="multipart/form-data">
    <p class="px-2">
        <label>
            Nom catégorie : <br>
            <input id="" class="border-1" name="catégorie" type="text">
        </label>
    </p>

    <p class="px-2" style="width: 200px">
        <input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" href="controller/CategorieController.php" value="Ajouter Catégorie">    
    </p>

</form>







<?php

$titre = "Ajout Catégorie";
$titre_secondaire = "Ajout Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>