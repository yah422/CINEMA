<?php 
ob_start(); 

?>
<div>
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
    
    <div class="messages">
        <?php
        if (isset($_SESSION["message"])) {
            echo "<p>" . $_SESSION["message"] . "</p>";
            unset($_SESSION["message"]); // Supprimer le message de la session
        }
        ?>
    </div>
</div>
<?php

$titre = "Ajout Catégorie";
$titre_secondaire = "Ajout Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>