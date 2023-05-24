<?php

namespace Src\Observer\Order;

use SplObserver;
use Src\Observer\Order\Observers\OrderPriceObserver;

class Order implements \SplSubject
{
    private $observers;

    private const PENDING = 1;
    private const PROCESSING = 2;
    private const READY = 3;
    private const SENT = 4;
    private const DELIVERED = 5;

    private int $status;

    public function __construct(private int $price)
    {
        $this->status = self::PENDING;
        $this->observers = new \SplObjectStorage();
    }

    public function process()
    {
        $this->status = self::PROCESSING;

        $this->registerProcessingObservers();
    }

    private function registerProcessingObservers(): void
    {
        $this->attach(new OrderPriceObserver());
    }

    public function ready()
    {
        $this->status = self::READY;

        $this->clearProcessingObservers();
    }

    private function clearProcessingObservers()
    {
        foreach ($this->observers as $observer) {
            $this->detach($observer);
        }
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changePrice(int $newPrice):void
    {
        $this->price = $newPrice;

        $this->notify();
    }
}
