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
<header>
    <img id="btn_nav" class="desktop_display_none" src="img/menu.png">
    <nav class="row middle nav_home_mobile nav_mobile_fermer">
        <ul class="row middle">
            <li class="img-nav desktop_display_none"><a href="index.php"><img src="img/legumalin_etiquette.png" /></a></li>
            <li><a href="faq.php">forum</a></li>
            <li><a href="tutoriels.php">tutoriels</a></li>
            <li><a href="a-propos.php">a propos</a></li>
            <li class="img-nav mobile_display_none" class="row middle"><a href="index.php"><img src="img/legumalin_etiquette.png" /></a></li>
            <li><a href="catalogue-jardins.php">nos jardins</a></li>
            <li><a href="actualites.php">actualites</a></li>
            <li><a href="boutique.php">boutique</a></li>
        </ul>
        <span class="desktop_display_none" id="span_nav_bg"></span>
    </nav>

    <aside class="row middle aside_ouvert">
            <div class="row between">
                <div class="column middle" id="btn_aside"><img id="img_aside" src="img/aside-left-arrow.png"></div>
                <div class="row">
                    <a href="boutique.php"><img src="img/shop.png"></a>
                    <a href="<?= $redirect ?>"><img src="img/user.png"></a>
                </div>
            </div>
        </aside>

    <div class="column middle">
        <h1>Le partage de potager<br /> <span class="green_bright">bio</span> et responsable</h1>
    </div>
</header>