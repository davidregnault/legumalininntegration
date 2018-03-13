<?php
require_once('include/pdo.inc.php');
//--------------------------------

if(isset($_POST['soumettre'])) {
    if(!empty($_POST['pseudo']) && !empty($_POST['message']))
    {
        $pdo->query("INSERT INTO tchat (pseudo, message, date_heure) VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())");
    }
}

$resultat = $pdo->query("SELECT id, pseudo, message, DATE_FORMAT(date_heure, '%d/%m/%Y à %Hh%i') AS date_fr FROM tchat WHERE id > '$_POST[idMessage]' ORDER BY id DESC");
$messages = $resultat->fetchAll(PDO::FETCH_ASSOC);

$nouveauxMessages = '';
foreach ( $messages as $key => $value ) {
    $nouveauxMessages .= '
<div class="col message-block" data-id-message="'.$value['id'].'" id="msg_'.$key.'">
	<div class="col-md-6">
		<p class="tchat_pseudo marron_clair">'.$value['pseudo'].'</p>
	</div>
	<div class="col-md-6">
		<p class="tchat_date">Le '.$value['date_fr'].'</p>
	</div>
	<div class="col-md-12">
		<p class="tchat_message">'.$value['message'].'</p>
	</div>
</div>
<hr>
';
}
$tableau = [
    'message' => $nouveauxMessages
];
echo json_encode($tableau);