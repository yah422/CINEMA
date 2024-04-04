<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/detailFilm.css">
    <link rel="stylesheet" href="ajoutFilm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/home-style.css">
    <title> <?= $titre ?> </title>
</head>
<body style="background: #f1f1f1;">
    <header>
        <nav>
            <a href="index.php?action=homePage">
                <div class="logo">
                    <img src="./public/images/Movie Maker.png" alt="logo CinemaAsma">
                </div>
            </a>
            <ul>
                <li><a href="index.php?action=homePage"> HOME </a></li>
                <li><a href="index.php?action=listFilm"> FILMS </a></li>
                <li><a href="index.php?action=listActeur"> ACTEURS </a></li>
                <li><a href="index.php?action=listRealisateur"> REALISATEURS </a></li>
                <li><a href="index.php?action=listRole">ROLES</a>  </li>
                <li><a href="index.php?action=listCategorie"> CATEGORIE </a></li>
            </ul>
        </nav> 

        

        

    </header>

        <div id="contenu" style="  display:flex; flex-direction: column;"> 
            <h1 class="display-1"> Cinéma </h1>
            <h2 class="h2" > <?= $titre_secondaire ?></h2>
        </div>

        <br>

        <div>
            <?= $contenu ?>
        </div>


    <footer id="footer" style=" font-size: xxx-small; width:100%; height: 180px; background-color: #130989;  display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;">

        <div>

            <div class="icons">
                <img src="facebook.svg" alt="">
                <img src="icons8-instagram-24.png" alt="">
                <img src="twitter.svg" alt=""> 
            </div>

            <div class="infos">
                <p> Terms & Condition &nbsp; | &nbsp; Privacy Policy &nbsp; | &nbsp; Contact Us </p>
            </div>

            <div class="rights"> 
                <p> 2024 &copy; Movie Maker - The best Cine reference  </p>
            </div>

        </div>

    </footer>

    <?php
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']); 
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>