<!DOCTYPE html>
<html>
<head>
    <title>Légumalin - Profil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="proprio_profil">

<?php include "include/header.php"; ?>


<section class="row middle section_filtre">
    <div class="column between">
        <h1>Je suis propriétaire</h1>
        <div class="page_description_head">
            <p></p>
        </div>
    </div>
    <div class="row between profil_bouton">
        <div class="modif_settings"><!-- C'est cette div qu'on cache selon qu'on soit sur son profil ou non -->
            <div class="btn green-btn">
                <a href="" class="green">
                    Modifier mon profil
                </a>
            </div>
        </div>
    </div>
</section>
<main>

    <div class="profil_jardinier_infos">

        <div class="profil_jardinier_id">

            <h3 class="profil_jardinier_h3 green">Prénom nom</h3>
            <div class="profile_bloc">
                <div class="profile_img" style=" background: url(img/nain.jpg) center;"></div>

                <ul>
                    <li><label class="legende green">âge</label>
                        <p class="profil_age">Blabla</p>
                    </li>
                    <li><label class="legende green">activité</label>
                        <p class="profil_activite">Blabla</p>
                    </li>
                    <li><label class="legende green">adresse</label>
                        <p class="profil_adresse">Blabla</p>
                    </li>
                </ul>

                <ul>
                    <li><label class="legende green">Description</label>
                        <p class="profil_description">Blabla</p></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="profil_proprio_jardins">
        <div class="row">
             <div class="profil_section_titre col">
                <h2 class="blanc">Mes jardins</h2>
                <p class="blanc">Les jardins que je mets à disposition.</p>
            </div>
            <div class="btn white-btn">
                <a href="" class="green">
                    Ajouter un jardin
                </a>
            </div>

        </div>

        <div class="row profil_liste_jardin">
            <div class="profil_jardin_card col">
                <div class="profil_jardin_img" style="background: url('img/bg_jardin_2.jpg') center">
                </div>

                <div class="profil_jardin_description">
                    <a href=""><p class="legende green">Le jardin</p></a>
                </div>
            </div>
            <div class="profil_jardin_card col">
                <div class="profil_jardin_img" style="background: url('img/bg_jardin_2.jpg') center">
                </div>

                <div class="profil_jardin_description">
                    <a href=""><p class="legende green">Le jardin</p></a>
                </div>
            </div>
            <div class="profil_jardin_card col">
                <div class="profil_jardin_img" style="background: url('img/bg_jardin_2.jpg') center">
                </div>

                <div class="profil_jardin_description">
                    <a href=""><p class="legende green">Le jardin</p></a>
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