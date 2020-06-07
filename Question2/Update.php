<?php

use Cart\Cart;
use Cart\ProductManager;
use Cart\SessionManager;

require __DIR__ . '/vendor/autoload.php';

$productManager = new ProductManager();
$sessionManager = new SessionManager();

$cart = new Cart($productManager, $sessionManager);
$cart->load();
$cart->update($_POST['product'], $_POST['qty']);
header('Location: index.php');
exit();