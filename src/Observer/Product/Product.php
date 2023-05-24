<?php

namespace Src\Observer\Product;

use http\Exception\InvalidArgumentException;
use SplObserver;
use Src\Observer\Product\Observers\ProductOfferProductPriceObserver;

class Product implements \SplSubject
{
    private $observers;

    public function __construct(private int $price)
    {
        $this->observers = new \SplObjectStorage();
    }

    public function changePrice(int $newPrice)
    {
        if($this->price === $newPrice){
            return;
        }

        if($newPrice <0){
            throw new InvalidArgumentException('Invalid price');
        }

        $this->price = $newPrice;

        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    public function attachPriceObservers()
    {
        $this->attach(new ProductOfferProductPriceObserver());
    }

    public function price():int
    {
        return $this->price;
    }
}
