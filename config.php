<?php
require_once('stripe-php-5.7.0/init.php');

$stripe = array(
  "secret_key"      => "sk_test_rp7XoLmFZZOYr63D3cQKaqE0",
  "publishable_key" => "pk_test_gz4qj4NTkFzucdyiSU63a9O2"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
