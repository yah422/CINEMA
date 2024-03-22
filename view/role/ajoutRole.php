<?php 
ob_start(); 

?>


<form action="index.php?action=ajoutRole" method="post" enctype="multipart/form-data">
    <p class="px-2">
        <label>
            Nom Rôle : <br>
            <input id="" class="border-1" name="nom_role" type="text">
        </label>
    </p>

    <p class="px-2" style="width: 200px">
        <input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" href="controller/RoleController.php" value="Ajouter un rôle">    
    </p>
    
</form>

















<?php

$titre = "Ajout Rôle";
$titre_secondaire = "Ajout Rôle";
$contenu = ob_get_clean();
require "view/template.php";

?>