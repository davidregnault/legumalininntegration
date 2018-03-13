<?php
require_once ('includes/requires.inc.php');

$TITLE = 'Affichage articles';
require_once('includes/header.inc.php');

if(!empty($_GET['delete']) && is_numeric($_GET['delete']))
{
    $delete = deleteGeneric('products', 'product_id', 'delete');

    if($delete === 1)
    {
        $_SESSION['flashMessage'] = flashMessage('suppr');
    } elseif ($delete === 0)
    {
        $_SESSION['flashMessage'] = flashMessage('error');
    }

    header('Location:post.php');
}

$connected = adminConnexion();

if ($connected)
{
    flashMessage('connected');
}
isFlashMessage();

$productsArray = selectAll('products');
?>

<?php require_once('includes/nav.inc.php'); ?>

<a href="addForm_posts.php">+ nouvel article</a>
<?php
if(!empty($productsArray)) :
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <?php

            foreach($productsArray[0] as $key => $eachProduct):
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
        foreach($productsArray as $eachProduct):
            ?>
            <tr>
                <?php
                foreach($eachProduct as $key => $v):
                    ?>
                    <td><?= $v; ?></td>
                <?php
                endforeach;
                ?>
                <td><a href="form_add.php?modif=<?= $eachProduct['product_id']; ?>">Modifier</a></td>
                <td><a href="?delete=<?= $eachProduct['product_id']; ?>">Delete</a></td>
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
#dd($productsArray);
?>

<!--<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>-->
<script src="assets/js/script.js"></script>
</body>
</html>
