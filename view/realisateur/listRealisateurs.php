<?php 
// temporisation
ob_start(); 
$realisateurs= $requete -> fetchAll();

?>
<!--  mise en place d'une table pour representer la bdd -->
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Réalisateur </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($realisateurs as $realisateur) {?>
                <tr>
                    <td> <a href="index.php?action=detailRealisateur&id=<?= $realisateur["id_realisateur"] ?>"> <?= $realisateur["reali"] ?> </a></td>
                
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
// var_dump($requeteRealisateur -> fetchAll());
?>


<?php
// temporisation
$titre = "Réalisateurs";
$titre_secondaire = "Réalisateurs";
$contenu = ob_get_clean();
require "view/template.php";

?>