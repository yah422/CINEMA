<?php

// -------------  il indique à une classe d hériter d un trait et il donne un alias à un espace de noms.use ------------
use Controller\FilmsController;
use Controller\ActeursController;
use Controller\RealisateursController;
use Controller\CategoriesController; 
use Controller\RolesController;

// ----------------- AUTO CHARGE LES CLASSES DU PROJET ---------------------
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

// On instancie le controller Cinema
$ctrlFilms = new FilmsController();
$ctrlActeurs = new ActeursController();
$ctrlRealisateurs = new RealisateursController();
$ctrlCategories = new CategoriesController();
$ctrlRoles = new RolesController();

// En fonction de l'action détectée dans l'URL par "action" on connecte avec la bonne méthode du controller

$id=(isset($_GET["id"])) ? $_GET["id"] : null;
// Format -> $type = (isset($_GET["type])) ? $_GET["type"] : null;

if(isset($_GET["action"])){

    switch ($_GET["action"]){
        // --------- FILMS ------------
        case "listFilms" : $ctrlFilms -> listFilms(); break;

        // ---------- ACTEURS -----------
        case "listActeurs" : $ctrlActeurs -> listActeurs(); break;

        // ----------- CATEGORIES -------------
        case "listCategories" : $ctrlCategories -> listCategories(); break;


    }
}