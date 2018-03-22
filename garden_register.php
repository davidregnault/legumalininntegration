<?php
require_once('include/requires.inc.php');
require_once('include/header.inc.php');

isFlashMessage();

?>
<main class="register">
    <h1><?= (!empty($_COOKIE['statut']) && $_COOKIE['statut'] == 1) ? "Partagez votre jardin !" : header('Location:404.php'); ?></h1>

    <form method="post" action="register_gardenTreatment.php">
        <div class="form-group">
            <label for="name">Nom du jardin : </label>
            <input type="text" value="" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse : </label>
            <input type="text" value="" name="adresse" id="adresse">
        </div>
        <div class="form-group">
            <label for="proprietaire">Owner : </label>
            <input type="text" value="<?= $_COOKIE['surname']; ?>" name="proprietaire" id="proprietaire">
        </div>
        <div class="form-group">
            <label for="distance">Distance : </label>
            <input type="text" value="" name="distance" id="distance">
        </div>
        <div class="form-group">
            <label for="size">Taille du terrain : </label>
            <input type="number" value="" name="size" id="size">
        </div>
        <div class="form-group">
            <label for="description">Description : </label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image : </label>
            <input type="file" value="" name="image" id="image">
        </div>
        <input type="submit" name="submit" value="S'inscrire"/>
    </form>
</main>
</body>
</html>