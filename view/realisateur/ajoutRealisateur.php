<?php ob_start(); ?>

<div class="wrapperForm">
    <div class="containerForm">
        <div class="">
            <h2>Ajout d'un réalisateur </h2>
            <div class="">

                <form enctype="multipart/form-data" action="index.php?action=ajoutRealisateur" method="post">
                    <div class="">
                        <div class="formInput">
                            <label for="prenom_personne"></label>
                            <input type="text" placeholder="Prénom" name="prenom_personne" id="prenom_personne" required>
                        </div>

                        <div class="formInput">
                            <label for="nom_personne"></label>
                            <input type="text" placeholder="Nom" name="nom_personne" id="nom_personne" required>
                        </div>

                        <div class="formInput">
                            <label for="sexe_personne">Sexe :</label>
                                M:<input type="radio" name="sexe_personne" class="radio" value="masculin" id="sexe_personne" required >
                                F:<input type="radio" name="sexe_personne" class="radio" value="féminin" required>
                        </div>

                        <div class="formInput">
                            <label for="personne.dateNaissance"></label>
                            <input type="date" name="dateNaissance" id="dateNaissance" required>
                        </div>

                    <div class="btn-submit">
                        <input type="submit" class="submit" name="submitRealisateur" id="submitRealisateur">
                    </div>
                    
                </form>

                <div class="messages">
                    <?php
                        if (isset($_SESSION["message"])) {
                            echo "<p>" . $_SESSION["message"] . "</p>";
                            unset($_SESSION["message"]); // Supprimer le message de la session
                    }?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$titre = "Ajouter Réalisateur";
$titre_secondaire = "Ajout d'un réalisateur";
$contenu = ob_get_clean();
require "view/template.php";
?>