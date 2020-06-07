<?php

namespace Cart;
class ProductManager
{
    private $products;

    /**
     * ProductManager constructor.
     */
    public function __construct()
    {
        //Define the products and price
        $this->products = [
            (object)['name' => "productA", 'price' => 10],
            (object)['name' => "productB", 'price' => 20],
            (object)['name' => "productC", 'price' => 30]];
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
}