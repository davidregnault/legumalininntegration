<?php

require_once('include/requires.inc.php');

if (!empty($_POST['product_id']) && is_numeric($_POST['product_id']) && !empty($_POST['quantity']) && is_numeric($_POST['quantity']))
{
    $produit = selectOne('products', 'product_id', $_POST['product_id'], PDO::PARAM_INT);

    #dd($produit);

    addToCart($produit, $_POST['quantity']);
    header('location:panier.php');
}
