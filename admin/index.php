<?php
    require_once ('includes/requires.inc.php');
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

    header('Location:index.php');
}

if (!empty($_SESSION['flashMessage'])):
    echo $_SESSION['flashMessage'];
endif;

$productsArray = selectAll('products');
?>

    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="">Utilisateurs</a></li>
        <li role="presentation"><a href="">Produits</a></li>
        <li role="presentation"><a href="">Actualités</a></li>
    </ul>

    <a href="form_add.php">+ nouveau produit</a>
    <?php
        if(!empty($productsArray)) :
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
    <?php

        foreach($productsArray[0] as $key => $eachProducts):
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
        foreach($productsArray as $eachProducts):
    ?>
        <tr>
            <?php
            foreach($eachProducts as $key => $v):
                ?>
                    <td><?= $v; ?></td>
            <?php
            endforeach;
            ?>
            <td><a href="form_add.php?modif=<?= $eachProducts['product_id']; ?>">Modifier</a></td>
            <td><a href="?delete=<?= $eachProducts['product_id']; ?>">Delete</a></td>
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
        dd($productsArray);
    ?>

	<!--<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>-->
	<script src="assets/js/script.js"></script>
	</body>
	</html>
