<?php 
ob_start(); 
$role = $requete->fetch();
$roleAffichage = $requete ->fetchAll();

?>

<h1><?= $role["nom_role"] ?></h1>

<table class="uk-table uk-table-striped">
    <h3> Rôle </h3>
            
            



<?php

$titre = "Détails Rôle";
$titre_secondaire = "Détails Rôle";
$contenu = ob_get_clean();
require "view/template.php";

?>