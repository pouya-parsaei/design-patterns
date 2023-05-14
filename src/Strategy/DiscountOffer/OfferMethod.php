<?php

namespace Src\Strategy\DiscountOffer;

interface OfferMethod
{
    public function provide(int $sumOrderAmount);
}
