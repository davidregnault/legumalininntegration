<?php

    require_once('include/requires.inc.php');

    $allProducts = selectAll('products');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta description="Boutique">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Légumalin - Boutique</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="boutique">

<?php include "include/header.php"; ?>

	<section class="row middle section_filtre">
		<div class="column between">
			<h1>La boutique</h1>
			<input type="" name="">
		</div>
		<div class="column between">
			<div></div>
			<div class="row between">
				<div class="filtres_boutique">
					<span>Filtres</span>
					<div class="row between">
						<div>Engrais</div>
						<div>Graines</div>
						<div>Matériel</div>
					</div>
				</div>
				<div class="filtres_boutique">
					<span>Par saison</span>
					<div class="row between">
						<div>Automne</div>
						<div>Hiver</div>
						<div>Printemps</div>
						<div>Eté</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<main class="column">

            <?php foreach($allProducts as $product): ?>
			<section class="row middle section_fiche">
				<div style="background-image: url(img/<?= (!empty($product['photo']) && file_exists('img/produits/' . $product['photo'])) ? 'produits/' . $product['photo'] .'' : 'NoImageFound.jpg'; ?>);">

                </div>
				<div>
					<div>
						<div class="titre-fiche"><span><?= $product['title']; ?></span></div>
						<div class="prix-produit"><?= $product['price']; ?> €</div>
						<div class="description-produit"><?= $product['description']; ?></div>
						<div class="distance-jardin">Distance : <span>34Km</span></div>
						<div class="btn green-btn"><a href="produit.php?id=<?= $product['product_id']; ?>">Acheter</a></div>
					</div>
				</div>
			</section>
            <?php endforeach; ?>
		</main>
<?php include "include/cookies.php"; ?>
<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>