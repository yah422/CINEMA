<?php ob_start(); ?>
<!-- Cette ligne commence la temporisation de la sortie -->
<table style="background: #f1f1f1; width:700px; margin-left: 30px;">
    <thead>
        <tr>
            <th></th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($requete->fetchAll() as $categorie) { ?>
        <!-- La boucle foreach parcourt les résultats de la requête -->
        <tr>
            <td>
                <a style="text-decoration: none;" href="index.php?action=detailCategorie&id=<?= $categorie["id_genreCine"]?>">
                    <?= $categorie["nom_genreCine"]?>
                </a>
            </td>
            <td>
                <a href="index.php?action=supprimeCategorie&id=<?= $categorie["id_genreCine"]?>">
                    <input id="i" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Supprimer">
                </a>
            </td>
        </tr>
            
        <?php } ?>
        <!-- Fin de la boucle foreach -->
    </tbody>
            
</table>
<br>
<p class="px-2" style="width: 200px">
    <a href="index.php?action=ajoutCategorie">
        <input id="i" style="margin-left: 30px;" class="form-control bg-primary text-white text-center" type="submit" name="submit" value="Ajouter catégorie">
    </a>
</p>
<?php 
// Fin de la temporisation de la sortie et stockage du contenu dans la variable $contenu
$titre = "Catégories"; 
$titre_secondaire = "Catégories"; 
$contenu = ob_get_clean(); 
require "view/template.php"; 
// Inclusion du template avec le contenu généré
?>