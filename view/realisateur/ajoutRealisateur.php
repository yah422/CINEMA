<?php 
ob_start(); 

?>









<?php

$titre = "Ajout Réalisateur";
$titre_secondaire = "Ajout Réalisateur";
$contenu = ob_get_clean();
require "view/template.php";

?>