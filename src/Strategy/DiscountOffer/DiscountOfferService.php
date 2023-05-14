<?php

namespace Src\Strategy\DiscountOffer;

class DiscountOfferService
{
    public function __construct(private OfferMethod $offerMethod)
    {

    }

    public function provideOffer(int $sumOrderAmount)
    {
        $this->offerMethod->provide($sumOrderAmount);
    }
}
