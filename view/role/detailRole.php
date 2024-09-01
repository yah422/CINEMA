<?php 
ob_start(); 
$nameRole = $requeteRole->fetch(); // Assurez-vous que $nameRole contient une valeur
?>

<section style="border-radius:0px;" id="role">
    <div  id="infoRole">
        <?php if ($nameRole): ?>
            <h1><?= $nameRole["nom_role"] ?></h1>
        <?php else: ?>
            <p>Aucun rôle trouvé.</p>
        <?php endif; ?>

        <?php foreach ($requeteActRole -> fetchAll() as $role): ?>
            <div style="margin-left: 30px;" >
                <a href="index.php?action=detailActeur&id=<?= $role["id_role"]?>"><img src='public/images/<?= $role["affiche_acteur"]?>' alt='Affiche acteur'></a> 
            </div>

            <div>
                <p> Titre Film : <a style="text-decoration: none;" href="index.php?action=detailFilm&id=<?= $role["id_film"]?>"><?= $role["titre_film"]?></a></p>
                <p> Nom acteur : <a style="text-decoration: none;" href="index.php?action=detailActeur&id=<?= $role["id_role"]?>"><?= $role["acteure"]?></a> </p>
                <p> Nom rôle : <a style="text-decoration: none;" href="index.php?action=detailRole&id=<?= $role["id_role"]?>"><?= $nameRole["nom_role"]?></a></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
$titre = "Détails Rôle";
$titre_secondaire = "Détails Rôle";
$contenu = ob_get_clean();
require "view/template.php";
?>
