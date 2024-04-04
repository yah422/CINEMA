<?php 
ob_start(); 
$details = $requeteCategorie ->fetchAll();

?>
<section>
    
    <div>
        <p> Genre Cinématographique : <?= $details["nom_genreCine"]?></p>
        <p> Titre film : <?= $details["titre_film"]?></p>
        <p> Réalisateur : <?= $details["realisateurName"]?></p>
        <p> Affiche du film : <?= $details["affiche_film"]?></p>
        <p> Note Film : <?= $details["note_film"]?></p>
    </div>
    
</section>

<?php

$titre = "Détails Catégorie";
$titre_secondaire = "Détails Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>