<?php 

ob_start();
$acteur = $requeteActeur -> fetch();

 ?>
    <section style="display: flex; flex-direction: row;">
          
        <div style="margin-left: 30px;" ><td> <img src='public/images/<?= $acteur["affiche_acteur"]?>' alt='Affiche du film'> </td></div>

        <div style="margin-left: 30px;">
            <p><strong><?= $acteur["acteur"]?></strong>  </p>
            <p> Date de Naissance : <?= $acteur["dateNaissance"]?></p> 
            <p> Sexe : <?= $acteur["sexe_personne"]?></p>    
        </div>

    </section>    
    <br>
    <br>
        <div class="title" style="margin-left: 30px;">
            <div class="ligneAcceuil"> </div>
            <h2> Bibliographie <br>  </h2>
            <br>
            <p style="text-align:justify;">  <?= $acteur["bibliographie_acteur"]?></p>
        </div>

    <br>
    <br>

        <div class="title" style="margin-left: 30px;">
            <div class="ligneAcceuil"> </div>
            <h2> Filmographie <br>  </h2>
            <br>
        </div>

    <div style="margin-left: 30px;">
        <table  class="table-responsive" style="width: 600px;">
            <thead>
                <tr>
                    <th> Affiche Film</th>
                    <th> Titre film </th>
                    <th> Rôle </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($requeteFilmActeur ->fetchAll() as $detailActeur ) {?>
                        <tr>
                            <td><img src='public/images/<?= $detailActeur["affiche_film"]?>' alt='Affiche du film'></td>
                            <td> <?= $detailActeur["titre_film"]?></td>
                            <td> <?= $detailActeur["nom_role"]?> </td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<?php

$titre = "Détails Acteurs";
$titre_secondaire = "Détails Acteurs";
$contenu = ob_get_clean();
require "view/template.php";
?>