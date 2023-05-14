<?php

namespace Src\Strategy\Delivery;

class DeliveryService
{
    public function __construct(private DeliveryMethod $deliveryMethod)
    {

    }

    public function startDelivery(Order $order)
    {
        $deliveryPrice = $this->deliveryMethod->price($order);
        $this->deliveryMethod->deliver($order);
    }
}
