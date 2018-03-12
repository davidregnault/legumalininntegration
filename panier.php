<?php

    require_once('include/requires.inc.php');
    require_once('include/header.inc.php');
if(!empty($_GET['suppr']) && is_numeric($_GET['suppr'])) {
    deleteFromCart($_GET['suppr']);
}
?>

<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Produit</th>
            <th style="width:10%">Prix</th>
            <th style="width:8%">Quantité</th>
            <th style="width:22%" class="text-center">Total</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php

        if(!empty($_SESSION['cart'])) :
        $nbreProduitsDansPanier = count( $_SESSION['cart']['id'] );
        $totalPanier = 0;

        for ( $i = 0; $i < $nbreProduitsDansPanier; $i ++ ) :
            $totalPanier += $_SESSION['cart']['prix_total_produit'][ $i ];
            ?>
            <tr>
                <td class="rowProduct" data-th="Product" data-id="<?= $i; ?>">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <img src="<?= 'img/produits/' .
                            $_SESSION['cart']['photo'][ $i ] ?>"
                                 alt="photo"
                                 class="img-responsive"/>
                        </div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">
                                <?= $_SESSION['cart']['titre'][ $i ] ?>
                            </h4>
                            <small><?= $_SESSION['cart']['reference'][ $i ] ?></small>
                            <p><?= $_SESSION['cart']['description'][ $i ]; ?></p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">
                    <?= $_SESSION['cart']['prix_unitaire'][ $i ] ?>€
                </td>
                <td data-th="Quantity">
                    <input type="number" class="form-control text-center quantityAjax"
                           value="<?= $_SESSION['cart']['quantite'][ $i ] ?>" name="quantity_<?= $i; ?>">
                </td>
                <td data-th="Subtotal" class="text-center">
                    <?= $_SESSION['cart']['prix_total_produit'][ $i ] ?>€
                </td>
                <td class="actions">
                    <button class="btn btn-info btn-sm refresh" data-id="<?= $i; ?>">
                        <i class="fa fa-refresh"></i>
                    </button>
                    <a href="?suppr=<?= $_SESSION['cart']['id'][ $i ] ?>" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>

        <?php endfor; ?>

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total General <?= $totalPanier ?>€</strong></td>
        </tr>
        <tr>
            <td>
                <a href="boutique.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Retour en boutique</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total general <?= $totalPanier ?>€</strong></td>
            <td><a href="" class="btn btn-success btn-block">Commander <i class="fa fa-angle-right"></i></a></td>
        </tr>
        </tfoot>
    </table>

    <?php

  else :
?>
    <div class="container">
      <div class="row">
        <p>Votre panier est vide</p>
      </div>
      <table id="cart" class="table table-hover table-condensed">
        <tr>
          <td>
            <a href="<?= PUBLIC_URL . '/catalogue_produits.php' ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Retour en boutique</a></td>
          <td colspan="2" class="hidden-xs"></td>
        </tr>
      </table>
    </div>
<?php
    endif;
?>
</div>
<div id="paypal-button"></div>

<div id="response"></div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
    paypal.Button.render({
        env: 'sandbox',

        locale: 'fr_FR',

        style: {
            size: 'medium',
            color: 'blue',
            shape: 'rect',
            label: 'checkout'
        },

        payment: function(data, actions) {

            return paypal.request.post('payment.php').then(function(data)
            {
                return data.id;
            });
        },

        onAuthorize: function(data, actions) {

            return paypal.request.post('pay.php',
                {
                    paymentID: data.paymentID,
                    payerID: data.payerID
                }).then(function(data)
            {
                console.log(data);
                var response = '<p> Merci de votre achat de ' + data.transactions[0]["amount"].total + ' € </p>';
                document.getElementById('response').innerHTML = response;
                console.log(data.transactions[0]["amount"].total);
            }).catch(function (err)
            {
                console.log('erreur', err);
            });
        }
    }, '#paypal-button');
</script>
</body>
</html>