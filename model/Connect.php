<?php

// -------------------- CATEGORISE VIRTUELLEMENT DANS UN ESPACE DE NOM LA CLASSE ------------------
namespace Model;
 
//Quand tu hérites d'une classe abstraite,tu dois définir toutes les méthodes abstraites de la classe parente dans la classe enfant, en respectant les règles habituelles de l'héritage et de la signature des méthodes.
// ------------ DECLARE LA CONNEXION A LA BASE DE DONNEE --------------
abstract class Connect {
    const HOST = "localhost";
    const DB = "cinema_asma";
    const USER = "root";
    const PASS = "";

    public static function seConnecter(){
        try {
            // CLASSE NATIVE \ PDO 
            return new \PDO(
                "mysql:host=". self::HOST.";cinema_asma=".self::DB.";charset=utf8", self::USER, self::PASS);
        }catch (\PDOExeption $ex){
            return $ex ->getMessage();
        }
    }
};
