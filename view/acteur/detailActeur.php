<?php 

ob_start();
$acteur = $requeteActeur -> fetch();

 ?>
    <section>
          
        <div><td> <img src='public/images/<?= $acteur["affiche_acteur"]?>' alt='Affiche du film'> </td></div>

        <div>
            <p> <?= $acteur["acteur"]?> </p>
            <p> Date de Naissance : <?= $acteur["dateNaissance"]?></p> 
            <p> Sexe : <?= $acteur["sexe_personne"]?></p>    
        </div>
        <div>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th> Titre film </th>
                        <th> Rôle </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($requeteFilmActeur ->fetchAll() as $detailActeur ) {?>
                            <tr>
                                <td> <?= $detailActeur["titre_film"]?></td>
                                <td> <?= $detailActeur["nom_role"]?> </td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        

    </section>

<?php

$titre = "Détails Acteurs";
$titre_secondaire = "Détails Acteurs";
$contenu = ob_get_clean();
require "view/template.php";
?>