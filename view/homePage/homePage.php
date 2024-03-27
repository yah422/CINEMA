<?php 
ob_start(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Home </title>
</head>
<body>
    <header>
        <nav class="navbar bg-primary" data-bs-theme="dark">
            <ul>
                <li><a style="text-decoration: none;" href="index.php?action=listFilm"> HOME </a></li>
                <li><a style="text-decoration: none;" href="index.php?action=listFilm"> FILMS </a></li>
                <li><a style="text-decoration: none;" href="index.php?action=listActeur"> ACTEURS </a></li>
                <li><a style="text-decoration: none;" href="index.php?action=listRealisateur"> REALISATEURS </a></li>
                <li><a style="text-decoration: none;" href="index.php?action=listRole">ROLES</a>  </li>
                <li> <a style="text-decoration: none;" href="index.php?action=listCategorie"> CATEGORIE </a></li>
            </ul>
        </nav>
    </header>

    <main>

    </main>

    <footer>

    </footer>

</body>
</html>

<?php

$titre = "Ajout Film";
$titre_secondaire = "Ajout Film";
$contenu = ob_get_clean();
require "view/template.php";

?>