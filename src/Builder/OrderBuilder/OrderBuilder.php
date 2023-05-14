<?php

namespace Src\Builder\OrderBuilder;

class OrderBuilder
{
    private $customer;
    private $totalPrice;
    private $finalPrice;
    private $deliveryAddress;
    private $orderLines;
    private $status;

    private $order;

    private function __construct(?Order $order)
    {
        $this->order = $order;
    }

    public static function forge(?Order $order):OrderBuilder
    {
        return new OrderBuilder($order);
    }

    public function withCustomer($customer):OrderBuilder
    {
        $this->customer = $customer;

        return $this;
    }

    public function withTotalPrice($price):OrderBuilder
    {
        $this->totalPrice = $price;

        return $this;
    }

    public function withFinalPrice($price):OrderBuilder
    {
        $this->finalPrice = $price;

        return $this;
    }

    public function withDeliveryAddress($deliveryAddress):OrderBuilder
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function withOrderLines($orderLines):OrderBuilder
    {
        $this->orderLines = $orderLines;

        return $this;
    }

    public function withStatus($status):OrderBuilder
    {
        $this->status = $status;

        return $this;
    }

    public function build():Order
    {
        return new Order(
            $this->customer ?? $this->order->getCustomer(),
            $this->totalPrice ?? $this->order->getTotalPrice(),
            $this->finalPrice ?? $this->order->getFinalPrice(),
            $this->deliveryAddress ?? $this->order->getDelivery(),
            $this->orderLines ?? $this->order->getOrderLines(),
            $this->status ?? $this->order->getStatus()
        );
    }
}
