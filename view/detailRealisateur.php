<?php ob_start(); ?>













<?php

$titre = "Détail Réalisateur";
$titre_secondaire = "Détail Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";

?>