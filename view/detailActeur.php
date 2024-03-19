<?php ob_start(); ?>
















<?php

$titre = "Détail Acteur";
$titre_secondaire = "Détail Acteur";
$contenu = ob_get_clean();
require "view/template.php";

?>