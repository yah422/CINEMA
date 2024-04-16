<?php 
// Temporisation
ob_start(); 
$realisateurs = $requete->fetchAll();
?>

<!-- Mise en place d'une table pour représenter la base de données -->
<table style="background: transparent; width:700px; margin-left: 30px;">
    <thead>
        <tr>
            <th> </th>
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
                        <input id="ii" class="form-control text-white text-center" type="submit" name="submit" value="Supprimer">
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutRealisateur"><input id="i" class="form-control text-white text-center" type="submit" name="submitRealisateur" value="Ajouter réalisateur"> </a>
</p>

<?php
// Fin de la temporisation
$titre = "Réalisateurs";
$titre_secondaire = " Liste des Réalisateurs";
$contenu = ob_get_clean();
require "view/template.php";
?>
