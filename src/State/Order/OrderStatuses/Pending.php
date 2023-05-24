<?php

namespace Src\State\Order\OrderStatuses;

use Src\State\CMS\Exceptions\InvalidStatusException;

class Pending extends \Src\State\Order\OrderStatus
{

    public function pending()
    {
        throw new InvalidStatusException('The pending order cannot change to pending again');
    }

    public function paid()
    {
        $this->order->transitTo(new Paid());
    }

    public function preparing()
    {
        // TODO: Implement preparing() method.
    }

    public function ready()
    {
        // TODO: Implement ready() method.
    }

    public function sent()
    {
        // TODO: Implement sent() method.
    }

    public function delivered()
    {
        // TODO: Implement delivered() method.
    }
}
