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
            <li><a href="index.php?action=detailFilm&id=5"><img src="public/images/thedark.jpg" alt="affiche_dark"></a></li>
            <li><a href="index.php?action=detailFilm&id=6"><img src="public/images/forest.jpg" alt="affiche_forestGump"></a></li>
            <li><a href="index.php?action=detailFilm&id=7"><img src="public/images/thegodfather.jpg" alt="affiche_godfather"></a></li>
            <li><a href="index.php?action=detailFilm&id=1"><img src="public/images/afficheInception.jpg" alt="affiche_inception"></a></li>
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