<?php
require_once("include/requires.inc.php");
$jardin = selectAll("jardins");

#dd($jardin);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta description="Bonjour">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Légumalin - Accueil</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="catalogue-jardin">
<?php include "include/header.php"; ?>

<section class="row middle section_filtre">
		<div class="column between">
			<h1>Nos jardins</h1>
			<input type="" name="">
		</div>
		<div class="column between">
			<div></div>
			<div class="row between">
				<div class="filtres_boutique">
					<span class="legende blanc">Filtres</span>
					<div class="row between">
						<div class="filter_name">Fruits</div>
						<div class="filter_name">Légumes</div>
						<div class="filter_name">Fleurs</div>
					</div>
				</div>
				<div class="filtres_boutique">
					<span class="legende blanc">Par département</span>
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
        <?php
            foreach($jardin as $eachGarden) :
        ?>
	<section class="row middle section_fiche">
		<div style="background-image: url('img/<?= $eachGarden["image"] ?>');">
		</div>
		<div>
			<div>
				<div class="titre-fiche"><h4 class="green"><?= $eachGarden["title"]; ?></h4></div>
                <div class="adresse-jardin"><p>Adresse : <span><?= $eachGarden["adresse"]; ?></span></p></div>
				<div class="proprietaire-jardin"><p>Proposé par : <span><?= $eachGarden["proprietaire"]; ?></span></p></div>
				<div class="distance-jardin"><p>Distance : <span><?= $eachGarden["distance"]; ?> km</span></p></div>
				<div class="taille-jardin"><p>Taille : <span><?= $eachGarden["size"]; ?> m2</span></p></div>
				<div class="date-publication-jardin"><p class="tchat_date">Publié le : <span><?= $eachGarden["updated_at"]; ?></span></p></div>
				<div class="btn green-btn"><a href="fiche-jardin.php?id_garden=<?= $eachGarden["id"]; ?>">En savoir plus</a></div>
			</div>
		</div>
	</section>
        <?php
            endforeach;
        ?>
</main>
<<<<<<< HEAD
=======



>>>>>>> 4149194ada9efc293115450f5bcdbb087935cb45
<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>

