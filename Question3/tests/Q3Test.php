<?php


class Q3Test extends \PHPUnit\Framework\TestCase
{
    public function testPublish()
    {
        $product = new \App\Product();
        $shopee = new \Shop\Shopee();
        $product->attach($shopee);
        $yahoo = new \Shop\Yahoo();
        $product->attach($yahoo);
        $expectStr = nl2br("上架通知\n") . nl2br("Shopee 已收到商品發佈通知\n") . nl2br("Yahoo 已收到商品發佈通知\n");
        $product->publish();
        $this->expectOutputString($expectStr);
    }
}
