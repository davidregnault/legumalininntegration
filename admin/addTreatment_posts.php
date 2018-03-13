<?php

require_once('../include/requires.inc.php');

if ((!empty($_POST['hidden_id']) && is_numeric($_POST['hidden_id'])) && isset($_POST['modifier']))
{
    extract($_POST);

    #dd($_POST);
    $insert = $pdo->prepare("UPDATE posts SET title = :title, resume = :resume, content = :content, author = :author, image = :image, rating = :rating, updated_at = NOW() WHERE post_id = :hidden_id");
    $insert->bindValue(':hidden_id', $hidden_id, PDO::PARAM_INT);
    $insert->bindValue(':title', $title);
    $insert->bindValue(':resume', $resume);
    $insert->bindValue(':content', $contenu);
    $insert->bindValue(':author', $author);
    $insert->bindValue(':image', $image);
    $insert->bindValue(':rating', $rating, PDO::PARAM_INT);
    #dd($insert);
    $insert->execute();

    $_SESSION['flashMessage'] = flashMessage('modifier', $title);

    header('Location:post.php');
}
elseif ((!empty($_POST) && !isset($_POST['hidden_id'])) && isset($_POST['ajouter']))
{
    extract($_POST);

    $insert = $pdo->prepare('INSERT INTO posts (post_id, title, resume, content, author, image, rating, created_at, updated_at) VALUES(NULL, :title, :resume, :content, :author, :image, :rating, NOW(), NOW())');
    $insert->bindValue(':title', $title);
    $insert->bindValue(':resume', $resume);
    $insert->bindValue(':content', $contenu);
    $insert->bindValue(':author', $author);
    $insert->bindValue(':image', $image);
    $insert->bindValue(':rating', $rating, PDO::PARAM_INT);

    $insert->execute();

    #dd($insert);

    $_SESSION['flashMessage'] = flashMessage('add', $title);

    #dd($_SESSION['flashMessage']);
    header('Location:post.php');
}
