<?php 
ob_start(); 

?>













<?php

$titre = "Ajout Rôle";
$titre_secondaire = "Ajout Rôle";
$contenu = ob_get_clean();
require "view/template.php";

?>