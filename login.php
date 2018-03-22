<?php
    require_once('include/requires.inc.php');
    require_once('include/header.inc.php');
    require_once('include/header.php');
isFlashMessage();

?>
<main class="login">
<h1>Page de connexion </h1>
<section class="column middle">

        <form method="post" action="connexion_treatment.php" style="padding: 5px;">
            <div class="form-group">
                <label for="login">Login :</label>
                <input type="text" name="login" id="login" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Se connecter</button>
        </form>

        <a href="register.php">Créer un compte Légumalin !</a>
</section>
</main>
</body>
</html>