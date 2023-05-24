<?php

namespace Src\State\Order;

abstract class OrderStatus
{
    protected Order $order;

    public function setOrder($order):void
    {
        $this->order = $order;
    }

    abstract public function pending();
    abstract public function paid();
    abstract public function preparing();
    abstract public function ready();
    abstract public function sent();
    abstract public function delivered();
}
