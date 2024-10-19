<?php
include('config.php');

$data = [
    'customer' => [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'passwd' => '12345678'
    ]
];

$ch = curl_init(API_URL . 'customers?ws_key=7RLMHHEL5ICZSSL9A26ZQ9AFJ19WKUZC' . API_KEY);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);

echo "Cliente creado: " . $response;
?>
