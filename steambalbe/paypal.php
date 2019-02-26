<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="paypal-button">
<script type="text/javascript">      
  paypal.Button.render({
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id'
    },
    style: {
      color: 'gold',   // 'gold, 'blue', 'silver', 'black'
      size:  'medium', // 'medium', 'small', 'large', 'responsive'
      shape: 'rect'    // 'rect', 'pill'
    },
    payment: function (data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    onAuthorize: function (data, actions) {
      return actions.payment.execute()
        .then(function () {
          window.alert('Thank you for your purchase!');
        });
    }
  }, '#paypal-button');
  </script>
</div>