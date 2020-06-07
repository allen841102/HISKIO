<?php


namespace Shop;

use SplSubject;

class Yahoo implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        echo nl2br("Yahoo 已收到商品發佈通知\n");
    }
}