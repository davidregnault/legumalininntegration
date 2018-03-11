<?php

require_once('include/requires.inc.php');

require_once('include/header.inc.php');

isFlashMessage();

if ( (!empty($_GET['statut']) && $_GET['statut'] === 'jardinier') || (!empty($_GET['statut']) && $_GET['statut'] === 'proprietaire') )
{
    $statut = $_GET['statut'];
    if ($statut === 'jardinier')
    {
        $checked_j = 'checked';
    } elseif ($statut === 'proprietaire')
    {
        $checked_p = 'checked';
    }
}
else
{
    header('Location:index.php');
}
?>

<h1>Bonjour, vous souhaitez vous enregistrer en tant que <?= $statut; ?> !</h1>

    <form method="post" action="register_treatment.php">
        <div class="form-group">
            <label for="name">Nom de famille : </label>
            <input type="text" value="" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="surname">Prénom : </label>
            <input type="text" value="" name="surname" id="surname">
        </div>
        <div class="form-group">
            <label for="login">Pseudo : </label>
            <input type="text" value="" name="login" id="login">
        </div>
        <div class="form-group">
            <label for="email">Email : </label>
            <input type="text" value="" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe : </label>
            <input type="password" value="" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="confirmation">Confirmation mot de passe : </label>
            <input type="password" value="" name="confirmation" id="confirmation">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="proprietaire" name="statut" value="1" <?= (!empty($checked_p)) ? "$checked_p" : ''; ?>>
            <label class="form-check-label" for="proprietaire">
                Propriétaire
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="statut" id="jardinier" value="2" <?= (!empty($checked_j)) ? "$checked_j" : ''; ?>>
            <label class="form-check-label" for="jardinier">
                Jardinier
            </label>
        </div>
        <div class="form-group">
            <label for="avatar">Avatar : </label>
            <input type="file" value="" name="avatar" id="avatar">
        </div>
        <input type="submit" name="submit" value="S'inscrire"/>
    </form>
</body>
</html>
