<?php 
ob_start(); 

?>

<form action="index.php?action=ajoutCategorie" method="post" enctype="multipart/form-data">
    <p class="px-2">
        <label>
            Nom catégorie : <br>
            <input id="" class="border-1" name="nom_genreCine" type="text">
        </label>
    </p>

    <p class="px-2" style="width: 200px">
        <a href="index.php?action=listCategorie"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Ajouter une catégorie"></a>    
    </p>
</form>







<?php

$titre = "Ajout Catégorie";
$titre_secondaire = "Ajout Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>