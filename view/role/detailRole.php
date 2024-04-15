<?php
ob_start();
 
$role = $requeteActRole->fetch();
 
// Fonction pour afficher les détails du rôle
function afficherDetailRole($role) {
    echo "<div id='infoRole'>";
 
    // Affichage du nom du rôle
    echo "<h1>";
    if(isset($role["nom_role"])) {
        echo $role["nom_role"];
    } else {
        echo "Nom du rôle non spécifié";
    }
    echo "</h1>";
 
    // Affichage de l'image de l'acteur avec un lien vers les détails de l'acteur
    echo "<div style='margin-left: 30px;'>";
    if(isset($role["affiche_acteur"])) {
        echo "<a href='index.php?action=detailActeur&id={$role["id_role"]}'><img src='public/images/{$role["affiche_acteur"]}' alt='Affiche acteur'></a>";
    } else {
        echo "<p>Affiche acteur non disponible</p>";
    }
    echo "</div>";
 
    // Affichage des détails du rôle
    echo "<div>";
    echo "<p>Titre Film : ";
    if(isset($role["titre_film"])) {
        echo "<a style='text-decoration: none;' href='index.php?action=detailFilm&id={$role["id_film"]}'>{$role["titre_film"]}</a>";
    } else {
        echo "Non spécifié";
    }
    echo "</p>";
    echo "<p>Nom acteur : ";
    if(isset($role["acteure"])) {
        echo "<a style='text-decoration: none;' href='index.php?action=detailActeur&id={$role["id_role"]}'>{$role["acteure"]}</a>";
    } else {
        echo "Non spécifié";
    }
    echo "</p>";
    echo "</div>";
 
    echo "</div>";
}
 
?>
 
<section id="role">
    <?php afficherDetailRole($role); ?>
</section>
 
<?php
$titre = "Détails Rôle";
$titre_secondaire = "Détails Rôle";
$contenu = ob_get_clean();
require "view/template.php";
?>