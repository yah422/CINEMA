<?php ob_start(); ?>















<?php

$titre = "Réalisateurs";
$titre_secondaire = "Réalisateurs";
$contenu = ob_get_clean();
require "view/template.php";

?>