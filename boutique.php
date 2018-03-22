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
					<span class="legende blanc">Filtres</span>
					<div class="row between">
						<div class="filter_name">Engrais</div>
						<div class="filter_name">Graines</div>
						<div class="filter_name">Matériel</div>
					</div>
				</div>
				<div class="filtres_boutique">
					<span class="legende blanc">Par saison</span>
					<div class="row between">
						<div class="filter_name">Automne</div>
						<div class="filter_name">Hiver</div>
						<div class="filter_name">Printemps</div>
						<div class="filter_name">Eté</div>
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
						<div class="titre-fiche"><h4 class="green"><?= $product['title']; ?></h4></div>
						<div class="prix-produit"><?= $product['price']; ?> €</div>
						<div class="description-produit"><p><?= $product['description']; ?></p></div>
						<div class="btn green-btn"><a href="produit.php?id=<?= $product['product_id']; ?>">Acheter</a></div>
					</div>
				</div>
			</section>
            <?php endforeach; ?>
		</main>
<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>