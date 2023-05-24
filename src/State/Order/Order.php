<?php

namespace Src\State\Order;

use Src\State\Order\OrderStatuses\Pending;

class Order
{
    private OrderStatus $status;

    public function __construct()
    {
        $this->transitTo(new Pending());
    }
    public function transitTo(OrderStatus $status)
    {
        $this->status = $status;

        $this->status->setOrder($this);
    }

    public function pay()
    {
        $this->status->paid();
    }

    public function prepare()
    {
        $this->status->preparing();
    }

    public function ready()
    {
        $this->status->ready();
    }

    public function send()
    {
        $this->status->sent();
    }

    public function deliver()
    {
        $this->status->delivered();
    }
}
