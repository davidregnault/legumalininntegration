<!DOCTYPE html>
<html>
<head>
    <title>Légumalin - Contact</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<?php include "include/header.php"; ?>

<main class="jardinier_profil">

    <main>
        <h1 class="h1_marron">Nous contacter</h1>
        <div class="contact">
            <div class="contact_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.426291724281!2d2.33921811603487!3d48.86914947928857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c7e25a349%3A0x5012b3632a6880b7!2sPalais+Brongniart!5e0!3m2!1sfr!2sfr!4v1519823505195" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="contact_form">
                <div>
                    <form>
                        <p class="contact_p">Vous pouvez nous envoyer un message pour toute question ou réclamation concernant Légumalin !</p>
                        <input type="text" id="name" placeholder="Qui êtes vous ?"/>
                        <input type="text" id="email" placeholder="@email.com"/>
                        <textarea id="msg" placeholder="Votre message ..."></textarea>
                        <button type="submit" class="btn orange-btn">Envoyer</button>
                    </form>
                </div>


            </div>

        </div>


    </main>

</main>
<?php include "include/cookies.php"; ?>
<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>

</html>