<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $titre ?> </title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <ul>
                <li><a href="#home"> HOME </a></li>
                <li><a href="#films"> FILMS </a></li>
                <li><a href="#acteurs"> ACTEURS </a></li>
                <li><a href="#realisateurs"> REALISATEURS </a></li>
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