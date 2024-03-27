<?php 
ob_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php?action=homePage">
            <div class="logo">
                <img src="./public/Images/Movie Maker.png" alt="logo CinemaAsma">
            </div>
        </a>

    </header>

    <main>

    </main>

</body>
</html>

<?php

$titre = " Home ";
$titre_secondaire = "Nouveauté du moment";
$contenu = ob_get_clean();
require "view/template.php";

?>