<?php

use Cart\Cart;
use Cart\ProductManager;
use Cart\SessionManager;

require __DIR__ . '/vendor/autoload.php';

$productManager = new ProductManager();
$sessionManager = new SessionManager();

$cart = new Cart($productManager, $sessionManager);
$cart->load();
$cart->delete($_POST['product']);
header('Location: index.php');
exit();