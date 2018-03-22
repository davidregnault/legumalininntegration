<?php

require_once('include/requires.inc.php');

if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['adresse']) && !empty($_POST['proprietaire']) && !empty($_POST['distance']) && !empty($_POST['size']) && !empty($_POST['image']))
{
    extract($_POST);
}
else
{
    $_SESSION['flashMessage'] = flashMessage('empty');
    header('Location:garden_register.php');
}
    try
    {
        $req = $pdo->prepare('INSERT INTO jardins(id, title, proprietaire, adresse, distance, size, image, description, created_at, updated_at) VALUES(NULL, :title, :proprietaire, :adresse, :distance, :size, :image, :description, NOW(), NOW())');
        $req->bindValue(':title', $name);
        $req->bindValue(':proprietaire', $proprietaire);
        $req->bindValue(':adresse', $adresse);
        $req->bindValue(':distance', $distance, PDO::PARAM_INT);
        $req->bindValue(':size', $size, PDO::PARAM_INT);
        $req->bindValue(':description', $description);
        $req->bindValue(':image', $image);

        $insert = $req->execute();

        #dd($insert);

        if ($insert)
        {
            header('Location:profil_proprietaire.php');
        }
        else
        {
            throw new Exception('Une erreur est survenue !');
        }
    }
    catch (Exception $e)
    {
        var_dump($e->getMessage());
        $_SESSION['flashMessage'] = flashMessage('error');
        header('Location:garden_register.php');
    }