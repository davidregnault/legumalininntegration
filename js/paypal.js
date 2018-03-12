paypal.Button.render({
    env: 'sandbox', // Or 'sandbox',

    //commit: true,

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
            //console.log(data["transactions"][0]["amount"]["total"]);
            console.log(data.transactions[0]["amount"].total);
        }).catch(function (err)
        {
            console.log('erreur', err);
        });
    }
}, '#paypal');