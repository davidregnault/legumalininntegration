<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">Légumalin : Front Office</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Gestion produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="post.php">Gestion articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">Gestions clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">Gestions clients</a>
            </li>
            <?= ($connected) ? '<li class="nav-item"><a class="nav-link" href="../logout_treatment.php">Se déconnecter</a></li>' : "
            "; ?>
        </ul>
    </div>
</nav>