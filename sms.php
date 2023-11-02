<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$headers = [
    'Accept' => 'application/json',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'apiKey' => '24bdf02e5bfb2a0f295d8075984b2e1d7813a013714573ef82250d2c3a65674f'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get 'to' and 'message' values from the form submission
    $to = $_POST['to'];
    $message = $_POST['message'];

    // Define form parameters
    $formParams = [
        'username' => 'SMS_1',
        'to' => $to,
        'message' => $message
    ];

    $options = [
        'form_params' => $formParams
    ];

    $request = new \GuzzleHttp\Psr7\Request('POST', 'https://api.africastalking.com/version1/messaging', $headers);
    $res = $client->sendAsync($request, $options)->wait();
    echo $res->getBody();
}

?>