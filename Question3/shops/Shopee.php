<?php


namespace Shop;

use SplSubject;

class Shopee implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        echo nl2br("Shopee 已收到商品發佈通知\n");
    }
}