<!DOCTYPE html>
<html>
<head>
<title>Légumalin - Profil</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
    
<body class="jardinier_profil">
    
<?php include "include/header.php"; ?>


<section class="row middle section_filtre">
    <div class="column between">
        <h1>Je suis jardinier</h1>
        <div class="page_description_head">
            <p></p>
        </div>
    </div>
    <div class="row between profil_bouton">
        <div class="modif_settings"><!-- C'est cette div qu'on cache selon qu'on soit sur son profil ou non -->
        <div class="btn orange-btn">
            <a href="">
                <p>Modifier mon profil</p>
            </a>
        </div>
        </div>
    </div>
</section>
<main>

    <div class="profil_jardinier_infos">

        <div class="profil_jardinier_id">
        
            <h3 class="profil_jardinier_h3">Prénom nom</h3>
             <div class="profile_bloc">
                 <div class="profile_img" style=" background: url(img/nain.jpg) center;"></div>
        
                     <ul>
                     <li><label class="legende">âge</label>
                     <p class="profil_age">Blabla</p>
                     </li>
                     <li><label class="legende">activité</label>
                      <p class="profil_activite">Blabla</p>
                     </li>
                     <li><label class="legende">adresse</label>
                      <p class="profil_adresse">Blabla</p>
                    </li>
                     </ul>
            
                     <ul>
                    <li><label class="legende">Description</label>
                        <p class="profil_description">Blabla</p></li>
                    </ul>
                 </div>
             </div>
        
             <div class="profil_jardinier_partage">
                <h3 class="profil_jardinier_h3">Je compte partager ma récolte ...</h3>
                <div class="profile_bloc profil_partage">
                        <div class="col">
                            <p class="legende">Pour moi</p>
                            <div class="graph_1">
                                <p class="partage_pourcent blanc">25%</p>
                            </div>
                        </div>

                    <div class="col">
                        <p class="legende">Pour vous</p>
                        <div class="graph_2">
                            <p class="partage_pourcent blanc">25%</p>
                        </div>
                    </div>

                    <div class="col">
                        <p class="legende">Pour eux</p>
                        <div class="graph_3">
                            <p class="partage_pourcent blanc">25%</p>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    
    <div class="profil_jardinier_jardins">
        <div class="profil_section_titre">
            <h2 class="blanc">Mes jardins</h2>
            <p class="blanc">Les jardins dans lesquels je passe actuellement.</p>
        </div>

        <div class="row profil_liste_jardin">
            <div class="profil_jardin_card col">
              <div class="profil_jardin_img" style="background: url('img/bg_jardin_2.jpg') center">
                </div>

                <div class="profil_jardin_description">
                <a href=""><p class="legende marron_fonce">Le jardin</p></a>
                </div>
            </div>
            <div class="profil_jardin_card col">
                <div class="profil_jardin_img" style="background: url('img/bg_jardin_2.jpg') center">
                </div>

                <div class="profil_jardin_description">
                    <a href=""><p class="legende marron_fonce">Le jardin</p></a>
                </div>
            </div>
            <div class="profil_jardin_card col">
                <div class="profil_jardin_img" style="background: url('img/bg_jardin_2.jpg') center">
                </div>

                <div class="profil_jardin_description">
                    <a href=""><p class="legende marron_fonce">Le jardin</p></a>
                </div>
            </div>
        </div>


    </div>
    
</main> 
<?php include "include/cookies.php"; ?>
<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
    
</html>