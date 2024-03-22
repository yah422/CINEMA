<?php 
ob_start(); 

?>









<?php

$titre = "Ajout Acteur";
$titre_secondaire = "Ajout Acteur";
$contenu = ob_get_clean();
require "view/template.php";

?>