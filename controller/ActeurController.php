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
        
        // requete acteur/personne
        $requeteActeur = $pdo -> prepare ("SELECT
            CONCAT(prenom_personne, ' ',nom_personne ) as acteurs,
            personne.dateNaissance,
            personne.sexe_personne
        FROM acteur
        INNER JOIN personne ON acteur.id_personne = personne.id_personne
        WHERE acteur.id_acteur = :id " );
        
        $requeteActeur -> execute(["id"=> $id]);
        
        // requete acteur/film/jouer
        $requeteFilmActeur = $pdo -> prepare ("SELECT
            film.titre_film,
            rolefilm.nom_role
        FROM
            acteur
        INNER  JOIN jouer ON acteur.id_acteur = jouer.id_acteur
        INNER JOIN 
            rolefilm ON jouer.id_role = rolefilm.id_role
        INNER JOIN 
            film ON jouer.id_film = film.id_film
        WHERE 
            acteur.id_acteur = :id");
        $requeteFilmActeur -> execute(["id" => $id]);

        // Inclusion de la vue pour le detail d'un acteur
        require "view/acteur/detailActeur.php";
    }

    public function ajoutActeur(){
        // Connexion à la base de données
        $pdo = Connect::seConnecter();
     
        // Vérification si le formulaire a été soumis
        if(isset($_POST["submitActeur"])){
     
            // Récupération et filtrage des données du formulaire
            $prenom_personne = filter_input(INPUT_POST, "prenom_personne", FILTER_SANITIZE_SPECIAL_CHARS);
            $nom_personne = filter_input(INPUT_POST, "nom_personne", FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe_personne = filter_input(INPUT_POST, "sexe_personne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_SPECIAL_CHARS);
     
            // Vérification si les données obligatoires sont présentes
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
    
                // Préparation de la requête pour lier la personne à l'acteur avec le rôle correspondant
                $requeteAjouterActeur = $pdo->prepare("INSERT INTO acteur (id_personne) VALUES (:id_personne)");
                $requeteAjouterActeur->execute([
                    "id_personne" => $id_personne,
                ]);
     
                // Message de succès
                $_SESSION["message"] = "L'acteur a bien été ajouté ! <i class='fa-solid fa-check'></i>";
     
                // Redirection vers la liste des acteurs
                header("Location: index.php?action=listActeur");
     
            } else {
                // Message d'erreur si des données obligatoires sont manquantes
                $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
            }
        }
     
        // Inclusion de la vue pour l'ajout d'acteur
        require "view/acteur/ajoutActeur.php";
    }

    // ^^ Supprimer un Acteur
    public function supprimeActeur($id){
        if(isset($id)) {
        $pdo = Connect::seConnecter();

        // ^^ on supprime ensuite la table jouer
        $requeteSupprimerActeurJ = $pdo->prepare("DELETE FROM jouer WHERE id_acteur=:id");
        $requeteSupprimerActeurJ-> execute(["id" => $id]);

        // ^^ on supprime ensuite la table personne
        $requeteSupprimerActeurP = $pdo->prepare("DELETE FROM personne WHERE id_personne=:id");
        $requeteSupprimerActeurP-> execute(["id" => $id]);

        // ^^ on supprime d'abord la table acteur
        $requeteSupprimeActeur = $pdo->prepare("DELETE FROM acteur WHERE id_acteur=:id");
        $requeteSupprimeActeur -> execute(["id" => $id]);

        $_SESSION["message"] = "L'acteur a bien été supprimé ! <i class='fa-solid fa-check'></i>";
        header("Location: index.php?action=listActeur");
        } else {
            $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
        
    }
  
    }



}