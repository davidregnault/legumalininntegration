<?php
    require_once('include/requires.inc.php');

    if (!empty($_GET['id_garden']) && is_numeric($_GET['id_garden']))
    {
        $garden = selectOne('jardins', 'id', $_GET['id_garden'], PDO::PARAM_INT);
        if(!$garden)
        {
            header('Location:404.php');
        }
    }
    else
    {
        header('Location:404.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta description="Bonjour">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Légumalin - Jardin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="fiche-jardin">
<?php include "include/header.php"; ?>

<section class="row middle section_filtre">
		<div class="column between">
			<h1>Nos jardins</h1>
			<input type="" name="">
		</div>
		<div class="column between">
		</div>
	</section>

<main class="column">
	<div class="column">
			<div class="row middle retour_produits"><a class="row middle around" href="catalogue-jardins.php"><img src="img/left-arrow.svg"><div class="legende black">Retour</div></a></div>
		</div>
	<section class="row middle section_fiche">
		<div style="background-image: url('img/<?= $garden['image']; ?>')"></div>
		<div>
			<div>
				<div class="titre-fiche"><h4><?= $garden['title']; ?></h4></div>
                <div class="adresse-jardin"><p>Adresse : <span><?= $garden['adresse']; ?></span></p></div>
                <div class="proprietaire-jardin"><p>Proposé par : <span><?= $garden['proprietaire']; ?></span></p></div>
                <div class="distance-jardin"><p>Distance : <span><?= $garden['distance']; ?> Km</span></p></div>
                <div class="taille-jardin"><p>Taille : <span><?= $garden['size']; ?> m2</span></p></div>
                <div class="date-publication-jardin"><p class="tchat_date">Publié le : <span><?= $garden['updated_at']; ?></span></p></div>
                <div class="btn green-btn"><a href="fiche-jardin.php">Prenez contact ! </a></div>
			</div>
		</div>
	</section>

</main>











<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>