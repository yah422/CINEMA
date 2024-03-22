<?php 
ob_start(); 

?>









<?php

$titre = "Ajout Catégorie";
$titre_secondaire = "Ajout Catégorie";
$contenu = ob_get_clean();
require "view/template.php";

?>