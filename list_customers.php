<?php
include('config.php');

$ch = curl_init(API_URL . 'customers?ws_key=7RLMHHEL5ICZSSL9A26ZQ9AFJ19WKUZC' . API_KEY);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$customers = json_decode($response, true);
echo "<h3>Lista de Clientes</h3>";
foreach ($customers['customers'] as $customer) {
    echo "ID: " . $customer['id'] . " - Nombre: " . $customer['firstname'] . " " . $customer['lastname'] . "<br>";
}
?>
