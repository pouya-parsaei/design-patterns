<?php

namespace Src\Builder\OrderBuilder;

class OrderLine
{
    public function __construct(
        private $itemName, private $count, private $price
    )
    {

    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


}
