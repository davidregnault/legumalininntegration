<?php

require_once('../include/requires.inc.php');
require_once('../include/header.inc.php');

$status = '';
if(!empty($_GET['modif']) && is_numeric($_GET['modif']))
{
    $status = 'modifier';
    $get = $_GET['modif'];
    $values = selectOne('posts', 'post_id', $get, PDO::PARAM_INT);
    extract($values);
}
else
{
    $status = 'ajouter';
}
?>


<h1><?= ($status == 'modifier' && !empty($get)) ? "$status l'article N° $get" : "$status un article"; ?></h1>


<div class="container">
    <div class="row">
        <form method="post" action="addTreatment_posts.php" style="padding: 5px;">
            <?= ($status == 'modifier' && !empty($get)) ? "<input type='hidden' value='$post_id' name='hidden_id'>" : ''; ?>
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" name="title" value="<?= ($status == 'modifier' && !empty($get)) ? "$title" : ""; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="resume">Resumé</label>
                <input type="text" name="resume" value="<?= ($status == 'modifier' && !empty($get)) ? "$resume" : ""; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="contenu">Article</label>
                <textarea name="contenu" class="form-control"><?= ($status == 'modifier' && !empty($get)) ? "$content" : ""; ?></textarea>
            </div>
            <div class="form-group">
                <label for="author">Auteur</label>
                <input type="text" name="author" value="<?= ($status == 'modifier' && !empty($get)) ? "$author" : ""; ?>" id="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="rating">Note</label>
                <input type="number" name="rating" value="<?= ($status == 'modifier' && !empty($get)) ? "$rating" : ""; ?>" id="rating" class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" value="<?= ($status == 'modifier' && !empty($get)) ? "$image" : ""; ?>" id="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="<?= $status; ?>"><?= $status; ?></button>
        </form>

    </div>

</div>
