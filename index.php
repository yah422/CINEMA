<?php

// &-------------  il indique à une classe d hériter d un trait et il donne un alias à un espace de noms.use ------------
use Controller\FilmController;
use Controller\ActeurController;
use Controller\RealisateurController;
use Controller\CategorieController; 
use Controller\RoleController;

// &----------------- AUTO CHARGE LES CLASSES DU PROJET ---------------------
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

// &On instancie le controller Cinema
$ctrlFilm = new FilmController();
$ctrlActeur = new ActeurController();
$ctrlRealisateur = new RealisateurController();
$ctrlCategorie = new CategorieController();
$ctrlRole = new RoleController();

// &En fonction de l'action détectée dans l'URL par "action" on connecte avec la bonne méthode du controller

$id=(isset($_GET["id"])) ? $_GET["id"] : null;
// &Format -> $type = (isset($_GET["type])) ? $_GET["type"] : null;

if(isset($_GET["action"])){

    switch ($_GET["action"]){
        //& --------- FILMS ------------
        case "listFilm" : $ctrlFilm -> listFilm(); break;

        //& ---------- ACTEURS -----------
        case "listActeur" : $ctrlActeur -> listActeur(); break;

        // &----------- CATEGORIES -------------
        case "listCategorie" : $ctrlCategorie -> listCategorie(); break;

        //& ----------- REALISATEURS --------------
        case "listRealisateur" : $ctrlRealisateur -> listRealisateur(); break;

        // &----------- ROLES ---------------
        case "listRole" : $ctrlRole -> listRole(); break;


    }
}