<?php
ob_start(); 

// var_dump($requete->fetchAll());

?>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Titre film</th>
            <th> Durée </th>
            <th> Année de parution </th>
            <th> Synopsis </th>
            <th> Réalisateur </th>
            <th> Notes </th>
            <th> Affiche du film </th>
        </tr>
    </thead>
    <tbody>
        <?php   
        
            foreach($requeteFilm ->fetchAll() as $detailFilm) {?>
                <tr> 
                    <td> <?= $detailFilm["titre_film"]?> </td> 
                    <td> <?= $detailFilm["duree_formatee"]?> </td>
                    <td> <?= $detailFilm["anneeSortie_film"]?> </td>
                    <td> <?= $detailFilm["synopsis_film"]?> </td> 
                    <td> <?= $detailFilm["realisateurName"]?> </td> 
                    <td> <?= $detailFilm["note_film"]?> </td>
                    <td> <?= $detailFilm["affiche_film"]?> </td>
                </tr> 
        <?php } 
         ?>
    </tbody>
</table>


<?php

$titre = "Détails Films";
$titre_secondaire = "Détails Films";
$contenu = ob_get_clean();
require "view/template.php";

?>