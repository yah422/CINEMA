<!DOCTYPE html>
<html style="width: 100%;" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="view/homePage/index.js" defer></script>
    <!--  ---------------------- css ----------------- -->
    
    <link rel="stylesheet" href="public/css/home-style.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/detailFilm.css">
    <link rel="stylesheet" href="public/css/ajoutFilm.css">
    <link rel="stylesheet" href="public/css/listeFilm.css">
    <link rel="stylesheet" href="public/css/listeActeur.css">
    <link rel="stylesheet" href="public/css/listeReal.css">
    <link rel="stylesheet" href="public/css/listeRole.css">
    <link rel="stylesheet" href="public/css/listeCategorie.css">
    <link rel="stylesheet" href="public/css/detailReal.css">
    <link rel="stylesheet" href="public/css/detailRole.css">
    <link rel="stylesheet" href="public/css/detailCategorie.css">
    <link rel="stylesheet" href="public/css/ajoutCasting.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="./public/images/logocine.png" type="image/png">
    <title> <?= $titre ?> </title>

</head>
<body style="background: #f1f1f1;">
    <header>
        <nav >
            <a href="index.php?action=homePage">
                <div class="logo">
                    <img src="./public/images/logocine.png" alt="logo CinemaAsma">
                </div>
            </a>
            <ul>
                <li><a href="index.php?action=homePage"> HOME </a></li>
                <li><a href="index.php?action=listFilm"> FILMS </a></li>
                <li><a href="index.php?action=listActeur"> ACTEURS </a></li>
                <li><a href="index.php?action=listRealisateur"> REALISATEURS </a></li>
                <li><a href="index.php?action=listRole">ROLES</a>  </li>
                <li><a href="index.php?action=listCategorie"> CATEGORIE </a></li>
                <li><a href="index.php?action=ajoutCasting"> CASTING </a></li>
            </ul>
        </nav> 

    </header>

        

        <main>

            <!-- <h2 style="font-size: xxx-large;
            font-family: 'Raleway';
            margin: 50px;">
                 $titre_secondaire 
            </h2> -->
            <div style="display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            align-items: center;" id="contient">
                <?= $contenu ?>
            </div>

        </main>


    <footer id="footer">

        <div>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>