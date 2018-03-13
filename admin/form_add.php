<?php

    require_once('includes/requires.inc.php');
    require_once('includes/header.inc.php');

    $status = '';
    if(!empty($_GET['modif']) && is_numeric($_GET['modif']))
    {
        $status = 'modifier';
        $get = $_GET['modif'];
        $values = selectOne('products', 'product_id', $get);
        extract($values);
    }
    else
    {
        $status = 'ajouter';
    }
?>

    <h1><?= ($status == 'modifier' && !empty($get)) ? "$status le produit N° $get" : "$status un produit"; ?></h1>


    <div class="container">
        <div class="row">
            <form method="post" action="addTreatment_product.php" style="border: 2px solid black; padding: 5px;">
                <?= ($status == 'modifier' && !empty($get)) ? "<input type='hidden' value='$product_id' name='hidden_id'>" : ''; ?>
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" name="title" value="<?= ($status == 'modifier' && !empty($get)) ? "$title" : ""; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="reference">Reference</label>
                    <input type="text" name="reference" value="<?= ($status == 'modifier' && !empty($get)) ? "$reference" : ""; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" cols="30" rows="10"><?= ($status == 'modifier' && !empty($get)) ? "$description" : ""; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="number" name="price" value="<?= ($status == 'modifier' && !empty($get)) ? "$price" : ""; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prix">Quantité</label>
                    <input type="number" name="quantity" value="<?= ($status == 'modifier' && !empty($get)) ? "$quantity" : ""; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <!-- BOUTON UPLOAD type="file" -->
                    <input type="file" name="photo" class="form-control" value="<?= ($status == 'modifier' && !empty($get)) ? "$photo" : ""; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="<?= $status; ?>"><?= $status; ?></button>
            </form>

        </div>

    </div>
</body>
</html>
