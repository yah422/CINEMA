<?php 
ob_start(); 

?>















<?php

$titre = "Ajout Casting Film";
$titre_secondaire = "Ajout Cating Film";
$contenu = ob_get_clean();
require "view/template.php";

?>