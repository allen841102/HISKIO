<?php

namespace Cart;

class Cart
{
    public $items = [];


    public function load()
    {
        //Load form session,find product price
        $this->items[] = new CarItem('ProductA', 10, 10);
        $this->items[] = new CarItem('ProductB', 20, 20);
    }

    public function getTotalAmount()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getTotal();
        }
        return $sum;
    }


}
