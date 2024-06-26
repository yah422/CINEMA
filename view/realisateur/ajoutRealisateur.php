<?php ob_start(); ?>

<div class="wrapperForm">
    <div class="containerForm">
        <div class="">
            <div class="">

                <form enctype="multipart/form-data" action="index.php?action=ajoutRealisateur" method="post">
                    <div class="">
                        <div class="formInput">
                            <label for="prenom_personne">Prénom :</label> <br>
                            <input type="text" placeholder="Prénom" name="prenom_personne" id="prenom_personne" required>
                        </div>

                        <div class="formInput">
                            <label for="nom_personne">Nom :</label> <br>
                            <input type="text" placeholder="Nom" name="nom_personne" id="nom_personne" required>
                        </div>

                        <div class="formInput">
                            <label>Sexe :</label><br>
                            <input type="radio" name="sexe_personne" class="radio" value="masculin" id="sexe_personne" required >
                            <label for="sexe_personne">Homme</label>
                            <input type="radio" name="sexe_personne" class="radio" value="féminin" required>
                            <label for="sexe_personne">Femme</label>
                            <input type="radio" name="sexe_personne" class="radio" value="autre" required>
                            <label for="sexe_personne">Autre</label>
                        </div>

                        <div class="formInput">
                            <label for="carriere_personne">Carrière :</label> <br>
                            <input type="number" min=0 placeholder="Carrière" name="carriere_personne" id="carriere_personne" required>
                        </div>

                        <div class="formInput">
                            <label for="dateNaissance">Date de naissance :</label><br>
                            <input type="date" name="dateNaissance" id="dateNaissance" required>
                        </div>

                        <p class="px-2">
                            <label> Bibliographie : </label><br>
                            <textarea id="synopsis_film" name="bibliographie_acteur" > Résumé son histoire . . . </textarea>
                        </p>

                    <div class="btn-submit"><br>
                        <input type="submit" class="submit" name="submitRealisateur" id="submitRealisateur">
                    </div>
                    
                </form>

                <div class="messages">
                    <?php
                        if (isset($_SESSION["message"])) {
                            echo "<p>" . $_SESSION["message"] . "</p>";
                            unset($_SESSION["message"]); // Supprimer le message de la session
                        }
                    ?>
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
