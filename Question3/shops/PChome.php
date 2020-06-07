<?php


namespace Shop;

use SplSubject;

class PChome implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        echo nl2br("PChome 已收到商品發佈通知\n");
    }
}