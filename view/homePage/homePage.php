<?php 
ob_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/home-style.css">
</head>
<body>
    <main>
        <ul>
            <li><img src="public/images/thedark.jpg" alt="affiche_dark"></li>
            <li><img src="public/images/forest.jpg" alt="affiche_forestGump"></li>
            <li><img src="public/images/thegodfather.jpg" alt="affiche_godfather"></li>
        </ul>

    </main>

</body>
</html>

<?php

$titre = " Home ";
$titre_secondaire = "Nouveauté du moment";
$contenu = ob_get_clean();
require "view/template.php";

?>