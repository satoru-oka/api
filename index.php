<?php
$api_key = "YOUR_API_KEY";

$data = [
    "name" => "satoru",
    "email" => "demo@demo.com"
];

require __DIR__ . "/vendor/autoload.php";

$stripe = new \Stripe\StripeClient($api_key);
$customer = $stripe->customers->create($data);
echo $customer;

//coding without libraries.
// $curl_init = curl_init();

// curl_setopt_array($curl_init, [
//     CURLOPT_URL => 'https://api.stripe.com/v1/customers',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_USERPWD => $api_key,
//     CURLOPT_POSTFIELDS => http_build_query($data)
// ]);

// $response = curl_exec($curl_init);
// curl_close($curl_init);
// echo $response;