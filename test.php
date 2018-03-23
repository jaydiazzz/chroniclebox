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
      <select id="shirtsize">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
        <option value="x-large">X-Large</option>
      </select>
      <script type="text/javascript">
      function validate(){
        var ssz = document.getElementById("shirtsize");
        var selectedValue = ssz.options[ssz.selectedIndex].value;
          if (selectedValue == "small"){
            alert("you chose small");
         }
        }
      </script>
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
