<?php
require_once ('includes/requires.inc.php');
require_once('includes/header.inc.php');

if(!empty($_GET['delete']) && is_numeric($_GET['delete']))
{
    $delete = deleteGeneric('posts', 'post_id', 'delete');

    if($delete === 1)
    {
        $_SESSION['flashMessage'] = flashMessage('suppr');
    } elseif ($delete === 0)
    {
        $_SESSION['flashMessage'] = flashMessage('error');
    }

    header('Location:post.php');
}

if (!empty($_SESSION['flashMessage'])):
    echo $_SESSION['flashMessage'];
endif;

$postsArray = selectAll('posts');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="">Utilisateurs</a></li>
    <li role="presentation"><a href="">Produits</a></li>
    <li role="presentation"><a href="">Actualités</a></li>
</ul>

<a href="addForm_posts.php">+ nouveau produit</a>
<?php
if(!empty($postsArray)) :
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <?php

            foreach($postsArray[0] as $key => $eachPost):
                ?>

                <th scope="col"><?= $key; ?></th>
            <?php
            endforeach;
            ?>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($postsArray as $eachPost):
            ?>
            <tr>
                <?php
                foreach($eachPost as $key => $v):
                    ?>
                    <td><?= $v; ?></td>
                <?php
                endforeach;
                ?>
                <td><a href="addForm_posts.php?modif=<?= $eachPost['post_id']; ?>">Modifier</a></td>
                <td><a href="?delete=<?= $eachPost['post_id']; ?>">Delete</a></td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
<?php
else:
    ?>
    <div class="alert alert-warning" role="alert">
        Whooops, pas de produits disponibles pour le moment
    </div>
<?php
endif;
dd($postsArray);
?>

<!--<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>-->
<script src="assets/js/script.js"></script>
</body>
</html>
