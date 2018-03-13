<?php

require_once('../include/requires.inc.php');

if ((!empty($_POST['hidden_id']) && is_numeric($_POST['hidden_id'])) && isset($_POST['modifier']))
{
    extract($_POST);

    #dd($_POST);
    $slug = to_slug($reference);
    $insert = $pdo->prepare("UPDATE products SET title = :title, reference = :reference, slug = :slug, description = :description, photo = :photo, price = :price, quantity = :quantity, updated_at = NOW() WHERE product_id = :hidden_id");
    $insert->bindValue(':hidden_id', $hidden_id, PDO::PARAM_INT);
    $insert->bindValue(':title', $title);
    $insert->bindValue(':reference', $reference);
    $insert->bindValue(':slug', $slug);
    $insert->bindValue(':description', $description);
    $insert->bindValue(':photo', $photo);
    $insert->bindValue(':price', $price, PDO::PARAM_INT);
    $insert->bindValue(':quantity', $quantity, PDO::PARAM_INT);

    #dd($insert);
    $insert->execute();

    $_SESSION['flashMessage'] = flashMessage('modifier', $title);

    header('Location:produit.php');
}
elseif ((!empty($_POST) && !isset($_POST['hidden_id'])) && isset($_POST['ajouter']))
{
    extract($_POST);

    $slug = to_slug($reference);
    $insert = $pdo->prepare('INSERT INTO products (product_id, title, reference, slug, description, photo, price, quantity, created_at, updated_at) VALUES(NULL, :title, :reference, :slug, :description, :photo, :price, :quantity, NOW(), NOW())');
    $insert->bindValue(':title', $title);
    $insert->bindValue(':reference', $reference);
    $insert->bindValue(':slug', $slug);
    $insert->bindValue(':description', $description);
    $insert->bindValue(':photo', $photo);
    $insert->bindValue(':price', $price, PDO::PARAM_INT);
    $insert->bindValue(':quantity', $quantity, PDO::PARAM_INT);

    $insert->execute();


    $_SESSION['flashMessage'] = flashMessage('add', $title);

    #dd($_SESSION['flashMessage']);
        header('Location:produit.php');
}
