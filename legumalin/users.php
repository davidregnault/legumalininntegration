<?php
require_once ('includes/requires.inc.php');

$TITLE = 'Gestion utilisateurs';
require_once('includes/header.inc.php');

$productsArray = selectAll('users');
?>

<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="">Utilisateurs</a></li>
    <li role="presentation"><a href="">Produits</a></li>
    <li role="presentation"><a href="">Actualités</a></li>
</ul>


<?php
if(!empty($productsArray)) :
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <?php

            foreach($productsArray[0] as $key => $eachProducts):
                # dd($key);
                ?>

                <th scope="col"><?= $key; ?></th>
            <?php
            endforeach;
            ?>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($productsArray as $eachProducts):
            ?>
            <tr>
                <td><?= $eachProducts['id']; ?></td>
                <td><?= $eachProducts['name']; ?></td>
                <td><?= $eachProducts['email']; ?></td>
                <td><?= $eachProducts['password']; ?></td>
                <td><?= $eachProducts['remember_token']; ?></td>
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
