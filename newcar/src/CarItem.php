<?php


namespace Cart;


class CarItem
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $qty;
    private $price;

    /**
     * CarItem constructor.
     * @param string $name
     * @param int $qty
     */
    public function __construct($name, $qty, $price)
    {
        $this->name = $name;
        $this->qty = $qty;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    //
    public function getTotal()
    {
        return $this->qty * $this->price;
    }
}