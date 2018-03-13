<?php
require_once('../include/requires.inc.php');

$produit = selectOne('products', 'product_id', $_GET['produit']);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta description="produit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Légumalin - "produit"</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="produit">

<?php require_once('../include/header.inc.php'); ?>

<section class="row middle section_filtre">
    <div class="column between">
        <h1>La boutique</h1>
        <input type="" name="">
    </div>
    <div class="column between">
    </div>
</section>

<main class="column">
    <div class="column">
        <div class="row middle retour_produits"><a class="row middle around" href=""><img
                        src="assets/images/left-arrow.svg">
                <div>Retour</div>
            </a></div>
    </div>

    <section class="fiche_produit">
        <div class="row">
            <img src="assets/images/<?= $produit['photo']; ?>">
        </div>
        <div class="column">
				<div class="column between">
					<h2><?= $produit['title']; ?></h2>
					<h3><?= $produit['reference']; ?></h3>
				</div>
            <span class="column around">
					<p><?= $produit['description']; ?></p>
					<div class="btn green-btn"><a href="">Acheter</a></div>
            </span>
        </div>

    </section>

</main>
<?php require_once('../include/cookies.php'); ?>
<?php require_once('../include/footer.php'); ?>

<script src="assets/js/script.js"></script>
</body>
</html>
