<?php
// -------------  il indique à une classe d hériter d un trait et il donne un alias à un espace de noms.use ------------

use Controller\CinemaController;
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

// ---------------- MISE EN PLACE DE LA VARIABLE ---------------
$ctrlCinema = new CinemaController();

if(isset($_GET["action"])){
    
// ----------------- AUTO CHARGE LES CLASSES DU PROJET ---------------------
    switch ($_GET["action"]){
        case "listFilms" : $ctrlCinema -> listFilms(); break;
        case "listActeurs" : $ctrlCinema -> listActeurs(); break;

    }
}