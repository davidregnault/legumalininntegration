<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Afficher Clients</a>
                </li>
                <li>
                    <a href="produits.php">Afficher Produits</a>
                </li>
                <li>
                    <a href="posts.php">Afficher Actualités</a>
                </li>

                <li><a href="logout_treatment.php">Deconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="index.php">Home</a></li>
    <li role="presentation"><a href="users.php">Utilisateurs</a></li>
    <li role="presentation"><a href="produits.php">Produits</a></li>
    <li role="presentation"><a href="post.php">Actualités</a></li>

    <?= ($connected) ? '<li role="presentation"><a href="logout_treatment.php">Se déconnecter</a></li>' : '<li role="presentation"><a href="connexion_treatment.php">Se Connecter</a></li>'; ?>
</ul>


<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Afficher Clients</a>
                </li>
                <li>
                    <a href="produits.php">Afficher Produits</a>
                </li>
                <li>
                    <a href="posts.php">Afficher Actualités</a>
                </li>

                <li><?= ($connected) ? '<li role="presentation"><a href="logout_treatment.php">Se déconnecter</a></li>' : '<li role="presentation"><a href="connexion_treatment.php">Se Connecter</a></li>'; ?></li>
            </ul>
        </div>
    </div>
</nav>
