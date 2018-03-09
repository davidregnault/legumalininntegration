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
						<div class="titre-fiche"><span>Titre du jardin</span></div>
						<div class="adresse-jardin">Adresse : <span>25 Place de la Bourse, 75002 Paris</span></div>
						<div class="proprietaire-jardin">Proposé par : <span>Jean Dupont</span></div>
						<div class="distance-jardin">Distance : <span>34Km</span></div>
						<div class="taille-jardin">Taille : <span>80 m2</span></div>
						<div class="date-publication-jardin">Pulié le : <span>08-03-2018</span></div>
						<div class="btn green-btn"><a href="fiche-jardinn.php">En savoir plus</a></div>
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