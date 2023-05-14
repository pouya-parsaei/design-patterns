<?php

namespace Src\Builder\OrderBuilder;

class OrderService
{
    public function newOrder(NewOrderData $data)
    {
        $order = OrderBuilder::forge()
            ->withCustomer($data->customer)
            ->withDeliveryAddress($data->deliveryAddress)
            ->build();
    }

    public function reOrder(Order $order)
    {
        $order = OrderBuilder::forge($order)
            ->withDeliveryAddress('new delivery address')
            ->build();
    }
}
