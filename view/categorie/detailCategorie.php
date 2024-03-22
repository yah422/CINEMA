<?php 
ob_start(); 
$details = $requeteCategorie ->fetchAll();
?>


<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Genre Cinématographique </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($details as $detailCategorie) {?>
                <tr>
                    <td> <?= $detailCategorie["nom_genreCine"]?> &nbsp;&nbsp; <?= $detailCategorie["nombre_films"]?> </td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php

// var_dump($requeteCategorie ->fetchAll());
?>

<?php

$titre = "Détails Catégorie";
$titre_secondaire = "Détails Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>