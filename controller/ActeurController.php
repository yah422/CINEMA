<?php 

// ^^On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class ActeurController {
    // ^^--------------- LISTER LES ACTEURS ---------------
    public function listActeur(){

        // ^^On se connecte
        $pdo= Connect::seConnecter();

        // ^^On exécute la requête de notre choix
        $requete = $pdo -> query("SELECT
        CONCAT(prenom_personne, ' ',nom_personne ) as acteurs,
        acteur.id_acteur
        FROM Acteur 
        INNER JOIN personne ON personne.id_personne = acteur.id_personne;
        ");
        // $requete -> execute(["id => $id"]);

        // ^^On relie par un "require" la vue qui nous intéresse
        require "view/acteur/listActeurs.php";
    }
    // ^^ ----------- AFFICHER LES DETAILS ACTEURS ------------
    public function detailActeur($id){

        // Connexion à la base de données
        $pdo= Connect::seConnecter();

        // Préparation de la requête
        $requete = $pdo -> prepare("SELECT * FROM acteur WHERE id_acteur = :id");
        $requete -> execute(["id"=> $id]);
        
        // requete
        $requeteActeur = $pdo -> prepare ("SELECT
            CONCAT(prenom_personne, ' ',nom_personne ) as acteurs,
            personne.dateNaissance,
            personne.sexe_personne,
            film.titre_film,
            rolefilm.nom_role
        FROM
            acteur
        INNER JOIN
            personne ON acteur.id_personne = personne.id_personne
        INNER JOIN 
            jouer ON acteur.id_acteur = jouer.id_acteur
        INNER JOIN 
            rolefilm ON jouer.id_role = rolefilm.id_role
        INNER JOIN 
            film ON jouer.id_film = film.id_film
        WHERE 
            acteur.id_acteur = :id");

        $requeteActeur -> execute(["id"=> $id]);

        // Inclusion de la vue pour le detail d'un acteur
        require "view/acteur/detailActeur.php";
    }

    public function ajoutActeur(){
        // Connexion à la base de données
        $pdo = Connect::seConnecter();
     
        // Vérification si le formulaire a été bien soumis
        if(isset($_POST["submitActeur"])){
     
            // filtrage des données
            $prenom_personne = filter_input(INPUT_POST, "prenom_personne", FILTER_SANITIZE_SPECIAL_CHARS);
            $nom_personne = filter_input(INPUT_POST, "nom_personne", FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe_personne = filter_input(INPUT_POST, "sexe_personne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_SPECIAL_CHARS);
            $nom_role = filter_input(INPUT_POST, "nom_role", FILTER_SANITIZE_SPECIAL_CHARS);
            $titre_film = filter_input(INPUT_POST, "titre_film", FILTER_SANITIZE_SPECIAL_CHARS);
     
            if($prenom_personne && $nom_personne && $sexe_personne && $dateNaissance){
     
                // Préparation de la requête pour ajouter une personne
                $requeteAjouterPersonne = $pdo->prepare("INSERT INTO personne (prenom_personne, nom_personne, sexe_personne, dateNaissance) VALUES (:prenom_personne, :nom_personne, :sexe_personne, :dateNaissance)");
                $requeteAjouterPersonne->execute([
                    "prenom_personne" => $prenom_personne,
                    "nom_personne" => $nom_personne,
                    "sexe_personne" => $sexe_personne,
                    "dateNaissance" => $dateNaissance
                ]);
     
                // Récupération de l'ID de la personne ajoutée
                $id_personne = $pdo->lastInsertId();
     
                // Préparation de la requête pour ajouter un film
                $requeteAjouterFilm = $pdo->prepare("INSERT INTO film (titre_film) VALUES (:titre_film)");
                $requeteAjouterFilm->execute(["titre_film" => $titre_film]);
     
                // Récupération de l'ID du film ajouté
                $id_film = $pdo->lastInsertId();
     
                // Préparation de la requête pour ajouter un rôle
                $requeteAjouterRole = $pdo->prepare("INSERT INTO rolefilm (nom_role) VALUES (:nom_role)");
                $requeteAjouterRole->execute(["nom_role" => $nom_role]);
     
                // Récupération de l'ID du rôle ajouté
                $id_role = $pdo->lastInsertId();
     
                // Préparation de la requête pour lier la personne à l'acteur avec le film et le rôle correspondants
                $requeteAjouterActeur = $pdo->prepare("INSERT INTO acteur (id_personne, id_film, id_role) VALUES (:id_personne, :id_film, :id_role)");
                $requeteAjouterActeur->execute([
                    "id_personne" => $id_personne,
                    "id_film" => $id_film,
                    "id_role" => $id_role
                ]);
     
                // Message
                $_SESSION["message"] = "L'acteur a bien été ajouté ! <i class='fa-solid fa-check'></i>";
     
                // Redirection vers la liste des acteurs
                header("Location: index.php?action=listActeur");
     
            } else {
                $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
            }
        }
     
        // Inclusion de la vue pour l'ajout d'acteur
        require "view/acteur/ajoutActeur.php";
    }

}