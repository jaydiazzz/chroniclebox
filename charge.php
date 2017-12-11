<?php
  require_once('./config.php');

  $token = $_POST['stripeToken'];
  $stripeinfo = \Stripe\Token::retrieve($token);
  $email = $stripeinfo->email;
  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token,
      'plan' => '0001'
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 3500,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $35.00!</h1>';
?>
