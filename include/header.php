<?php
    require_once('include/functions.php');

    $connected = isConnected();

if ($connected && $_COOKIE['statut'] == 1)
{
    $redirect = 'profil_proprietaire.php';

} elseif($connected && $_COOKIE['statut'] == 2)
{
    $redirect = 'profil_jardinier.php';
}elseif(!$connected)
{
    $redirect = 'login.php';
} else
{
    $redirect = '';
}
?>
<header class="type_header">
    <nav class="column middle">
        <ul class="row middle">
            <li><a href="faq.php">forum</a></li>
            <li><a href="tutoriels.php">tutoriels</a></li>
            <li><a href="a-propos.php">a propos</a></li>
            <li class="row middle"><a href="index.php"><img src="img/legumalin_logo.png" /></a></li>
            <li><a href="catalogue-jardins.php">nos jardins</a></li>
            <li><a href="actualites.php">actualites</a></li>
            <li><a href="boutique.php">boutique</a></li>
        </ul>
    </nav>
    <aside class="row middle aside_ouvert">
            <div class="row between">
                <div class="column middle" id="btn_aside"><img id="img_aside" src="img/aside-left-arrow.png"></div>
                <div class="row">
                    <a href="panier.php"><img src="img/shop.png"></a>
                    <a href="<?= $redirect ?>"><img src="img/user.png"></a>
              </div>
            </div>
        </aside>
</header>