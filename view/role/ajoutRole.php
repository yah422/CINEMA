<?php 
ob_start(); 

?>
<?php

$id = isset($_GET['id']) ? $_GET['id'] : null




















?>
<?php

$titre = "Ajout Rôle";
$titre_secondaire = "Ajout Rôle";
$contenu = ob_get_clean();
require "view/template.php";

?>