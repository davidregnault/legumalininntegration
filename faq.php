<?php
require_once('init.inc.php');
//--------------------------------

if(isset($_POST['soumettre'])) {
    if(!empty($_POST['pseudo']) && !empty($_POST['message']))
    {
        // echo "pseudo : $_POST[pseudo]<br>";
        // echo "message : $_POST[message]<br>";
        $pdo->query("INSERT INTO tchat (pseudo, message, date_heure) VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())");
        $msg = '<div class="alert alert-success" role="alert">
				Votre message a bien ete enregistre :-).
			</div>';
    } else {
        $msg = '<div class="alert alert-danger" role="alert">
				Les deux champs doievnt etre remplis.
			</div>';
    }
}

// code PHP pour affichage des messages
// 1 : je VALIDE ma requete SQL :
// SELECT pseudo, message, DATE_FORMAT(date_heure, "%d/%m/%Y à %Hh%i") AS date_fr FROM tchat ORDER BY date_heure DESC
// 2 : je pose ma requette SQL (sans bug) dans mon environnement PHP

$resultat = $pdo->query('SELECT pseudo, message, DATE_FORMAT(date_heure, "%d/%m/%Y à %Hh%i") AS date_fr FROM tchat ORDER BY date_heure DESC');
// var_dump($pdo);
// echo '<hr>';
// var_dump(get_class_methods($resultat));

// $resultat nous donne un objet PDOStatement. Cet objet contient le texte (pseudo, message, date_heure) de la base de donnees, que nous souhaitons afficher en HTML.
// // Pour recuperer ce texte, je dois passer par une methode / fonction de PDOStatement.
// echo '<pre>';
// print_r($resultat->fetchAll(PDO::FETCH_ASSOC));
// echo '</pre>';
// echo '<hr>';
// je recupere le smessages dans une variable $messages, qui devient un donc un ARray qui contient toutes les infos de ma table TCHAT
$messages = $resultat->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($messages);
// echo '</pre>';
// echo '<hr>';


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta description="Bonjour">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Légumalin - Forum</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="faq">
<?php include "include/header.php"; ?>

<main class="column">
<<<<<<< HEAD
    <h1>Forum (FAQ)</h1>
    <section>
        <section class="col middle between">

            <div>
                <p class="question_forum">A quoi sert Légumalin ? </p>
                <p class="reponse_forum">Legumalin est une plateforme proposant à des propriétaires de jardins de laisser l’opportunité à des particuliers de jouir d’une partie de ce terrain à des particuliers afin de créer un potager. </p>
            </div>

            <span></span>
            <div>
                <p class="question_forum">Qui peut poster une annonce sur Legumalin ?</p>
                <p class="reponse_forum">Tout le monde, particulier ou professionnel, dans la mesure ou vous respectez le droit français et que vous respectez les conditions générales d’utilisation.</p>
            </div>

            <span></span>
            <div>
                <p class="question_forum">Comment créer mon jardin ? </p>
                <p class="reponse_forum">Dans un premier temps il faut créer en renseignant les champs de demandés (Nom, Prénom, Mail…). Ensuite créer votre jardin et y insérer ce que vous proposez (plus de détails vous seront donnés sur la page en question). Nous avons tout fait pour que le processus soit simple. Vous devriez rapidement comprendre.</p>
            </div>
            <span></span>
            <div>
                <p class="question_forum">Quel est le coût de ce service? </p>
                <p class="reponse_forum">L’inscription est gratuite et la location du jardin se fait en versant une partie de votre récolte au propriétaire du jardin. </p>
            </div>

            <span></span>
            <div>
                <p class="question_forum">L’inscription est elle obligatoire pour la consultation des offres?</p>
                <p class="reponse_forum">Non, l’inscription est obligatoire uniquement pour déposer une offre ou pour contacter un propriétaire.</p>
            </div>

            <span></span>
            <div>
                <p class="question_forum">Quelle est la durée de l’annonce ?</p>
                <p class="reponse_forum">Les annonces publiées seront conservées jusqu’à la modification ou la suppression par son annonceur ou par l’administrateur du site. Mais une annonce ne sera plus affichée dans les résultats de recherche après un mois si son propriétaire ne l’a ni modifiée ni réactivée. Nous essayons ainsi le plus que possible de n’afficher que les produits réellement disponibles.</p>
            </div>

            <span></span>
            <div>
                <p class="question_forum">Si je publie une annonce, comment serai-je contacté par les personnes intéressées?</p>
                <p class="reponse_forum">Vous serez contacté via la plateforme Legumalin et un mail vous informant d’une réponse vous sera aussi communiqué. Vous pourrez ensuite, si vous le souhaitez, échanger vos numéros de téléphones respectifs.</p>
            </div>

            <span></span>
            <div>
                <p class="question_forum">Puis-je ajouter des photos à mon profil ?</p>
                <p class="reponse_forum">Oui ! Et nous vous y encourageons. Une annonce est toujours plus sympa avec une photo de votre jardin ou de vos produits.</p>
            </div>

            <span></span>
            <div>
                <p class="question_forum">Puis-je laisser des commentaires à propos d’un jardin?</p>
                <p class="reponse_forum">Oui, cela est même conseillé pour aider les futurs jardiniers à choisir un jardin. L’équipe Legumalin se réserve le droit de refuser la publication d’un commentaire si celui-ci est jugé inapproprié.</p>
            </div>

            <span></span>
            <div>
                <p class="question_forum">Suis-je obligé de verser une partie de ma récolte à une association caritative ?</p>
                <p class="reponse_forum">Non. Le versement à une association partenaire est facultative et le jardinier peut choisir, ou non, de faire ce don tous les mois. Si vous choisissez de le faire, vous pouvez, plus tard, renoncer à cette option.</p>
            </div>
        </section>
    </section>
    <section>
        <section class="col middle between">
            <div>
                <h2>Tchat</h2>
=======
	<h1>Forum (FAQ)</h1>
	<section>
		<section class="col middle between">
			
			<div>
				<p class="question_forum">A quoi sert Légumalin ? </p>
				<p class="reponse_forum">Legumalin est une plateforme proposant à des propriétaires de jardins de laisser l’opportunité à des particuliers de jouir d’une partie de ce terrain à des particuliers afin de créer un potager. </p>
			</div>

			<span></span>
			<div>
				<p class="question_forum">Qui peut poster une annonce sur Legumalin ?</p>
				<p class="reponse_forum">Tout le monde, particulier ou professionnel, dans la mesure ou vous respectez le droit français et que vous respectez les conditions générales d’utilisation.</p>
			</div>

			<span></span>
			<div>
				<p class="question_forum">Comment créer mon jardin ? </p>
				<p class="reponse_forum">Dans un premier temps il faut créer en renseignant les champs de demandés (Nom, Prénom, Mail…). Ensuite créer votre jardin et y insérer ce que vous proposez (plus de détails vous seront donnés sur la page en question). Nous avons tout fait pour que le processus soit simple. Vous devriez rapidement comprendre.</p>
			</div>
			<span></span>
			<div>
				<p class="question_forum">Quel est le coût de ce service? </p>
				<p class="reponse_forum">L’inscription est gratuite et la location du jardin se fait en versant une partie de votre récolte au propriétaire du jardin. </p>
			</div>

			<span></span>
			<div>
				<p class="question_forum">L’inscription est elle obligatoire pour la consultation des offres?</p>
				<p class="reponse_forum">Non, l’inscription est obligatoire uniquement pour déposer une offre ou pour contacter un propriétaire.</p>
			</div>

			<span></span>
			<div>
				<p class="question_forum">Quelle est la durée de l’annonce ?</p>
				<p class="reponse_forum">Les annonces publiées seront conservées jusqu’à la modification ou la suppression par son annonceur ou par l’administrateur du site. Mais une annonce ne sera plus affichée dans les résultats de recherche après un mois si son propriétaire ne l’a ni modifiée ni réactivée. Nous essayons ainsi le plus que possible de n’afficher que les produits réellement disponibles.</p>
			</div>

			<span></span>
			<div>
				<p class="question_forum">Si je publie une annonce, comment serai-je contacté par les personnes intéressées?</p>
				<p class="reponse_forum">Vous serez contacté via la plateforme Legumalin et un mail vous informant d’une réponse vous sera aussi communiqué. Vous pourrez ensuite, si vous le souhaitez, échanger vos numéros de téléphones respectifs.</p>
			</div>

			<span></span>
			<div>
				<p class="question_forum">Puis-je ajouter des photos à mon profil ?</p>
				<p class="reponse_forum">Oui ! Et nous vous y encourageons. Une annonce est toujours plus sympa avec une photo de votre jardin ou de vos produits.</p>
			</div>

			<span></span>
			<div>
				<p class="question_forum">Puis-je laisser des commentaires à propos d’un jardin?</p>
				<p class="reponse_forum">Oui, cela est même conseillé pour aider les futurs jardiniers à choisir un jardin. L’équipe Legumalin se réserve le droit de refuser la publication d’un commentaire si celui-ci est jugé inapproprié.</p>
			</div>

			<span></span>
			<div>
				<p class="question_forum">Suis-je obligé de verser une partie de ma récolte à une association caritative ?</p>
				<p class="reponse_forum">Non. Le versement à une association partenaire est facultative et le jardinier peut choisir, ou non, de faire ce don tous les mois. Si vous choisissez de le faire, vous pouvez, plus tard, renoncer à cette option.</p>
			</div>
		</section>
	</section>
	<section>
		<section class="col middle between">
			<div>
				<h2>Tchat</h2>
>>>>>>> bf2babdb49db89539e3249a957b86dcf8f126b58
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?php if(!empty($msg)) { echo $msg; } ?>
                            <form method="post" action="">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                    <input type="text" name="pseudo" class="form-control" placeholder="Votre pseudo" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                    <textarea name="message" class="form-control" placeholder="Votre message" aria-label="Username" aria-describedby="basic-addon1"></textarea>
                                </div>
                                <input type="submit" name="soumettre" value="envoyer" class="btn btn-default">
                            </form>
                        </div>
                    </div>
                    <h1>Affichage des messages</h1>
                    <?php
                    foreach($messages as $key => $value) :
                        ?>
                        <div class="row" id="msg_<?= $key ?>">
                            <div class="col-md-6">
                                <p><?= $value['pseudo'] ?></p>
                            </div>
                            <div class="col-md-6">
                                <p>Le <?= $value['date_fr'] ?></p>
                            </div>
                            <div class="col-md-12">
                                <p><?= $value['message'] ?></p>
                            </div>
                        </div>
                        <hr>
                    <?php
                    endforeach;
                    ?>
                </div>

            </div>
<<<<<<< HEAD
        </section>
    </section>
=======
		</section>
	</section>
>>>>>>> bf2babdb49db89539e3249a957b86dcf8f126b58
</main>
<?php include "include/cookies.php"; ?>
<?php include "include/footer.php"; ?>
<script src="js/script.js"></script>
</body>
</html>
