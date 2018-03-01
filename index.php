<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta description="Bonjour">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Légumalin - Accueil</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="accueil">
	
<?php include "include/home_header.php"; ?>

	<section class="column middle concept">
		<div class="column bottom-left">
			<div>
				<h2>Notre concept</h2>
				<p>Légumalin est un site internet proposant à des propriétaires de jardin de laisser l’opportunité à des particuliers de cultiver un potager, en échange d’un pourcentage de la récolte. L’agriculture devra être forcément <span>biologique</span>.<br> Légumalin met en avant la préservation de l’<span>environnement</span>, l’accès à une nourriture <span>saine</span> et <span>accessible,à tous</span> et le <span>partage</span>.</p>
			</div>
		</div>
	</section>
	<section class="garden row">
		<div class="column middle">
			<h3>Envie de jardiner ?</h3>
			<img src="img/proprio.png">
			<p>Les propriétaires, comme leur nom l’indique, sont des personnes détenant un jardin et souhaitant le mettre à profit d’autrui en échange d’un pourcentage de la récolte et d’un apprentissage de la permaculture biologique.</p>
			<div class="btn orange-btn"><a href="">S'inscrire</a></div>
		</div>
		<div class="column middle">
			<h3>Envie de légumes ?</h3>
			<img src="img/jardinier.png">
			<p>Les jardiniers sont des particuliers n’ayant pas de jardins mais souhaitant cultiver des légumes en suivant le principe de l’agriculture biologique.  Ainsi, leur potager leur permettra de subvenir, en parti, à leurs besoins en légumes sans se ruiner. Une partie de leur récolte sera reversée au propriétaire du jardin et une autre, s’il le souhaite, à une association. </p>
			<div class="btn green-btn"><a href="">S'inscrire</a></div>
		</div>
	</section>

	<section class="news">
		<div class="column middle">
			<div class="column middle">
				<h2>Actualités</h2>
			</div>
			<div class="column middle">
				<h3>Une labelisation complémentaire pour le marché bio européen</h3>
				<div class="row middle slider">
					<div>
						<img src="img/left-arrow.png">
					</div>
					<div class="row middle">
						<div class="column middle">
							<img src="img/AB.jpg">
						</div>
						<div class="column between">
							<p>Déçue par le compromis trouvé sur le règlement bio européen, la Fnab souhaite une labellisation nationale plus exigeante, complémentaire de l’eurofeuille. En effet, elle propose une labellisation française complémentaire du label européen pour conserver la confiance des consommateurs.</p>
							<div class="btn white-btn"><a href="">Lire la suite</a></div>
						</div>
					</div>
					<div>
						<img src="img/right-arrow.png">
					</div>
				</div>
				<div class="row">
					<div class="btn-actualites"></div>
					<div class="btn-actualites"></div>
					<div class="btn-actualites"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="shop">
		<div>
			<h2>Boutique</h2>
			<p>Voici les dernières nouveautés de la boutique, des produits biologiques pour faciliter la culture de vos plants !</p>
		</div>
		<div class="row middle">
			<div>
				<div>
					<div>GRAINES BETTERAVES CHIOGGIA</div>
					<div>Variété de betteraves originale. D'excellente qualité gustative, cette betterave décorera gaiement vos plats. </div>
				</div>
				<div id="shop_product_1">
					<div class="btn brown-btn">
						<a href="">voir fiche</a>
					</div>
				</div>
			</div>

			<div>
				<div>
					<div>FERTILISANT BIOLOGIQUE COMPLET</div>
					<div>Fertilisant organique completPour des légumes plus savoureux, plus volumineux et plus abondants.</div>
				</div>
				<div id="shop_product_2">
					<div class="btn brown-btn">
						<a href="">voir fiche</a>
					</div>
				</div>
			</div>

			<div>
				<div>
					<div>GRAINES AUBERGINES BARBENTANE</div>
					<div>Variété rustique résistante à la plupart des maladies. Elle produit des fruits allongés en forme de massue, violet foncé. </div>
				</div>
				<div id="shop_product_3">
					<div class="btn brown-btn">
						<a href="">voir fiche</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="row middle newsletter">
		<div class="row middle around">
			<div>S'INSCRIRE A LA NEWSLETTER ?</div>
			<input type="email" name="newsletter" placeholder="Adresse mail">
			<div class="btn green-btn"><a href="">S'inscrire</a></div>
		</div>
	</section>


<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>





















