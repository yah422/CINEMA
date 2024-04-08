<?php 
ob_start(); 

?>

<div id="formulaireADD" style="    border: solid black;
    width: 50%;
    height: auto;
    display: flex;
    flex-direction: row;
    align-content: center;
    justify-content: center;
    align-items: center;
    background-color: black;
    border-radius: 15px;
    margin-bottom: 30px;
    padding-top: 30px;">

    <form action="index.php?action=ajoutFilm" method="post" enctype="multipart/form-data">

        <label style=" color: #bd7d07;" for="titre_film">Titre du film :</label><br>
        <input style="border-radius:15px; color:orange; background-color: black;" type="text" id="titre_film" name="titre_film" required><br>
    
      
    
        <label style=" color: #bd7d07;" for="anneeSortie_film">Année de sortie :</label><br>
        <input style="border-radius:15px; color:orange; background-color: black;" type="number" id="anneeSortie_film" name="anneeSortie_film" required><br>
    
        <label style=" color: #bd7d07;" for="duree_film">Durée du film :</label><br>
        <input style="border-radius:15px; color:orange; background-color: black;" type="number" id="duree_formatee" name="duree_film" required><br>

        <p>
            <label style=" color: #bd7d07;"> Genre :</label><br>
            <?php
                foreach($requeteCateFilm ->fetchAll() as $cateFilm) {?>

                    <input style="border-radius:15px; color:orange; background-color: black;" type="checkbox" id="id_genreCine" value=<?=$cateFilm["id_genreCine"]?> name="nom_genreCine" >
                    <label style=" color: #bd7d07;"><?= $cateFilm["nom_genreCine"]?></label>
                
                <?php }  ?>

        </p>

        <label style=" color: #bd7d07;" for="synopsis_film">Synopsis : </label><br>
        <textarea style=" background-color: black;" id="synopsis_film" name="synopsis_film" required></textarea><br>
    
        <label style=" color: #bd7d07;" for="note_film">Note :</label><br>
        <input style="border-radius:15px; color:orange; background-color: black;" type="number" class="border-1" min="0" max="5" id="note_film" name="note_film" required><br>
        
        <p class="px-2">
                <label  style=" color: #bd7d07;">Réalisateur : </label><br>
                <select style="background-color:black; color:  #bd7d07;" id="realisateurName" class="border-1" name="id_realisateur" >
                    <option value="">

                    <?php
                    foreach($requeteRealFilm ->fetchAll() as $realFilm) {?>
                    
                        <option style="color: #bd7d07;" value="<?=$realFilm["id_realisateur"]?>"><?= $realFilm["realisateurName"]?></option>
                    
                    <?php }  ?>
                    </option>
                </select>
            </p><br>
    
        <label style=" color: #bd7d07;" for="affiche">Affiche du film:</label><br>

        <input style="  color: #bd7d07; background-color: black;" type="file" id="affiche" name="affiche" accept="image/*" required><br>

        <button style="border-radius:15px; width:150px; height:45px;  color: #bd7d07; background-color: black; margin-top: 15px; margin-bottom: 15px;" type="submit" name="submitFilm">Ajouter le film</button> 
        
        <div class="messages">
            <?php
                if (isset($_SESSION["message"])) {
                    echo "<p>" . $_SESSION["message"] . "</p>";
                    unset($_SESSION["message"]); // Supprimer le message de la session
                }
            ?>
        </div>
    </form>
</div>

<?php

$titre = "Ajout Film";
$titre_secondaire = "Ajout Film";
$contenu = ob_get_clean();
require "view/template.php";

?>