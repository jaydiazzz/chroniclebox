<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test</title>
</head>
<body>

  <?php
    require('config.php');
  ?>
  <form action="charge.php" method="post">
      <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']?>"
        data-amount="3500"
        data-locale="auto"
        data-company="Company Name"
        data-billingAddress="true"
        data-email="true">
      </script>
  </form>
</body>
</html>
