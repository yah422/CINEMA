<?php 
// !temporisation
ob_start(); 
?>













<div class="messages">
    <?php
        if (isset($_SESSION["message"])) {
            echo "<p>" . $_SESSION["message"] . "</p>";
            unset($_SESSION["message"]); // Supprimer le message de la session
        }
    ?>
</div>


<?php
// !temporisation
$titre = "Ajout Acteur";
$titre_secondaire = "Ajout Acteur";
$contenu = ob_get_clean();
require "view/template.php";

?>