<?php

namespace Cart;

class Cart
{
    public $items = [];
    /**
     * @var ProductManager
     */
    private $productManager;
    /**
     * @var SessionManager
     */
    private $sessionManager;

    public function __construct(ProductManager $productManager, SessionManager $sessionManager)
    {
        $this->productManager = $productManager;
        $this->sessionManager = $sessionManager;
    }

    public function load()
    {
        $data = $this->sessionManager->get('cart');
        /** @var CarItem $value */
        foreach ($data as $key => $value) {
            $price = $this->productManager->findPrice($value->getName());
            $this->items[] = new CarItem($value->getName(), $value->getQty(), $price);

        }
        //Load form session,find product price
//        $this->items[] = new CarItem('ProductA', 10, 10);
//        $this->items[] = new CarItem('ProductB', 20, 20);
    }

    public function getTotalAmount()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getTotal();
        }
        return $sum;
    }

    public function add($name)
    {
        $isNew = true;
        /** @var CarItem $item */
        foreach ($this->items as $item) {
            if ($item->getName() == $name) {
                $item->setQty($item->getQty() + 1);
                $isNew = false;
            }
        }
        if ($isNew) {
            $price = $this->productManager->findPrice($name);
            $this->items[] = new CarItem($name, 1, $price);
        }
        $this->sessionManager->set('cart', $this->items);
        return true;
    }

    public function delete($name)
    {
        /** @var CarItem $item */
        foreach ($this->items as $key => $item) {
            if ($item->getName() == $name) {
                unset($this->items[$key]);
            }
        }
        $this->sessionManager->set('cart', $this->items);
        return true;
    }

    public function update($name, $qty)
    {
        foreach ($this->items as $key => $item) {
            if ($item->getName() == $name) {
                if ($qty > 0) {
                    $item->setQty($qty);
                } else {
                    unset($this->items[$key]);
                }
            }
        }
        $this->sessionManager->set('cart', $this->items);
        return true;
    }


}
