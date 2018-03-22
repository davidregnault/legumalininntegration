<?php

    require_once('include/requires.inc.php');

    if (!empty($_GET['id']) && is_numeric($_GET['id']))
    {
        $produit = selectOne('products', 'product_id', $_GET['id'], PDO::PARAM_INT);
        #dd($product);

        if(!$produit)
        {
            header('Location:boutique.php');
        }
    }
    else
    {
        header('Location:boutique.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta description="Boutique">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Légumalin - "produit"</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="produit">

<?php include "include/header.php"; ?>

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
			<div class="row middle retour_produits"><a class="row middle around" href="boutique.php"><img src="img/left-arrow.svg"><div class="legende black">Retour</div></a></div>
		</div>

			<section class="row middle section_fiche">
				<div style="background-image: url(img/<?= (!empty($produit['photo']) && file_exists('img/produits/' . $produit['photo'])) ? 'produits/' . $produit['photo'] .'' : 'NoImageFound.jpg'; ?>)">
				</div>
                <form method="post" action="addCart_treatment.php">
                    <input type="hidden" name="product_id" value="<?= (!empty($produit['product_id']) && is_numeric($produit['product_id'])) ? $produit['product_id'] : 0; ?>">
                    <div>
                        <div>
                            <div name="titre" class="titre-fiche"><h4 class="green"><?= (!empty($produit)) ? $produit['title'] : 'Oups, nous rencontrons un léger soucis !'; ?></h4></div>
                            <div name="prix" class="prix-produit"><?= (!empty($produit)) ? $produit['price'] : 'Oups, nous rencontrons un léger soucis !'; ?> €</div>
                            <div name="description" class="description-produit"><p><?= (!empty($produit)) ? $produit['description'] : 'Oups, nous rencontrons un léger soucis !'; ?></p></div>

                            <select name="quantity" id="quantity">
                                <?php for($i=1; $i <= intval($produit['quantity']); $i++ ) : ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php endfor ?>
                            </select>
                            <button type="submit" class="btn green-btn"name="addCart">Ajouter au panier</button>
                        </div>
                    </div>
                </form>
			</section>
		</main>

<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>