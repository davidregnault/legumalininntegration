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
			<section class="row middle section_fiche">
				<div>
				</div>
				<div>
					<div>
						<div class="titre-fiche"><span>Titre du produit</span></div>
						<div class="prix-produit">35€</div>
						<div class="description-produit">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</div>
						<div class="distance-jardin">Distance : <span>34Km</span></div>
						<div class="btn green-btn"><a href="fiche-jardinn.php">Acheter</a></div>
					</div>
				</div>
			</section>
		</main>
	



</main>
<?php include "include/cookies.php"; ?>
<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>