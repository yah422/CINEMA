<?php ob_start(); ?>



















<?php

$titre = "Acteurs";
$titre_secondaire = "Acteurs";
$contenu = ob_get_clean();
require "view/template.php";

?>