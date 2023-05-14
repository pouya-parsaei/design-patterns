<?php

namespace Src\Builder\OrderBuilder;

class Order
{
    private $customer;
    private $totalPrice;
    private $finalPrice;
    private $deliveryAddress;
    private $orderLines;
    private $status;

    /**
     * @param $customer
     * @param $totalPrice
     * @param $finalPrice
     * @param $deliveryAddress
     * @param $orderLines
     * @param $status
     */
    public function __construct($customer, $totalPrice, $finalPrice, $deliveryAddress, $orderLines, $status)
    {
        $this->customer = $customer;
        $this->totalPrice = $totalPrice;
        $this->finalPrice = $finalPrice;
        $this->deliveryAddress = $deliveryAddress;
        $this->orderLines = $orderLines;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @return mixed
     */
    public function getFinalPrice()
    {
        return $this->finalPrice;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @return mixed
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


}
