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
        <a href="controller/RoleController.php"><input id="i" class="form-control text-white text-center" type="submit" name="submit" value="Ajouter un rôle"></a>    
    </p>
    
</form>

















<?php

$titre = "Ajout Rôle";
$titre_secondaire = "Ajout Rôle";
$contenu = ob_get_clean();
require "view/template.php";

?>