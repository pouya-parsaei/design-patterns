<?php

namespace Src\Strategy\Delivery;

interface DeliveryMethod
{
    public function price(Order $order);

    public function deliver(Order $order);
}
