<?php 
ob_start(); 

?>


<form action="index.php?action=ajoutFilm" method="post" enctype="multipart/form-data">
    <p class="px-2">
        <label>
            Nom du film : <br>
            <input id="" class="border-1" name="titre_film" type="text">
        </label>
    </p>











    <p class="px-2" style="width: 200px">
        <a href="controller/FilmController.php"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Ajouter le film"></a>    
    </p>
    
</form>






<?php

$titre = "Ajout Film";
$titre_secondaire = "Ajout Film";
$contenu = ob_get_clean();
require "view/template.php";

?>