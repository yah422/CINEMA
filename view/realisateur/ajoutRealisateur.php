<?php 
ob_start(); 

?>

<form action="index.php?action=ajoutRealisateur" method="post" enctype="multipart/form-data">
    <p class="px-2">
        <label>
            Nom  : <br>
            <input id="" class="border-1" name="nom_personne" type="text">
        </label>
    </p>

    <p class="px-2">
        <label>
            Prénom : <br>
            <input id="" class="border-1" name="prenom_personne" type="text">
        </label>
    </p>

    <p class="px-2">
        <label>
            Sexe : <br>
            <input id="" class="border-1" name="sexe_personne" type="text">
        </label>
    </p>

    <p class="px-2">
        <label>
            Date de naissance : <br>
            <input id="" class="border-1" name="dateNaissance" type="text">
        </label>
    </p>

    <p class="px-2" style="width: 200px">
        <a href="index.php?action=listRealisateur"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submitRealisateur" value="Ajouter un réalisateur"></a>    
    </p>
</form>



<?php



?>
<?php

$titre = "Ajout Réalisateur";
$titre_secondaire = "Ajout Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";

?>