<?php 
// Temporisation
ob_start(); 
$realisateurs = $requete->fetchAll();
?>

<!-- Mise en place d'une table pour représenter la base de données -->
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Réalisateur </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($realisateurs as $realisateur): ?>
            <tr>
                <td> 
                    <a style="text-decoration: none;" href="index.php?action=detailRealisateur&id=<?= $realisateur["id_realisateur"] ?>"> <?= $realisateur["reali"] ?> </a>
                </td>
                <td>
                    <a href="index.php?action=supprimeRealisateur&id=<?= $realisateur["id_realisateur"] ?>">
                        <input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Supprimer">
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutRealisateur"><input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submitRealisateur" value="Ajouter un réalisateur"> </a>
</p>

<?php
// Fin de la temporisation
$titre = "Réalisateurs";
$titre_secondaire = "Réalisateurs";
$contenu = ob_get_clean();
require "view/template.php";
?>
