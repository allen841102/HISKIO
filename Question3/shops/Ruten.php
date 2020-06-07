<?php


namespace Shop;

use SplSubject;

class Ruten implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        echo nl2br("Ruten 已收到商品發佈通知\n");
    }
}