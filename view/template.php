<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> <?= $titre ?> </title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <ul>
                <li><a href=""> HOME </a></li>
                <li><a href="index.php?action=listFilm"> FILMS </a></li>
                <li><a href="index.php?action=listActeur"> ACTEURS </a></li>
                <li><a href="index.php?action=listRealisateur"> REALISATEURS </a></li>
                <li><a href="index.php?action=listRole">ROLES</a>  </li>
                <li> <a href="index.php?action=listCategorie"> CATEGORIE </a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="contenu"> 
            <h1 class="display-1"> PDO Cinéma </h1>
            <h2 class="h2" > <?= $titre_secondaire ?></h2>
            <?= $contenu ?>

        </div>

    </main>

    <footer>

    </footer>

</body>
</html>