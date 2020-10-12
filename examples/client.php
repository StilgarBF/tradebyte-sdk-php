<?php
require 'vendor/autoload.php';

$client = new Tradebyte\Client([
    'credentials' => [
        'account_number' => '1234',
        'account_user' => 'xyz',
        'account_password' => 'xyz'
    ]
]);

/*
 * orders
 */
try {
    $iterator = $client->getOrderHandler()->getOrdersBy();

    foreach ($iterator as $order) {
        var_dump($order->getId());
    }
} catch (Exception $e) {
    var_dump($e->getMessage());
}
