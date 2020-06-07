<?php

use Shop\PChome;
use Shop\Ruten;
use Shop\Shopee;
use App\Product;
use Shop\Yahoo;

require __DIR__ . '/vendor/autoload.php';

$product = new Product();

//Shopee
$observer1 = new Shopee();
$product->attach($observer1);


//PChome
$observer2 = new PChome();
$product->attach($observer2);


//Ruten
$observer3 = new Ruten();
$product->attach($observer3);


//Yahoo
$observer4 = new Yahoo();
$product->attach($observer4);

$product->publish();

echo nl2br("//Detach yahoo\n");

$product->detach($observer4);
$product->publish();

