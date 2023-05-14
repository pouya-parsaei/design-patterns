<?php

namespace Src\FlyWeight\DiscountGenerator;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Client
{
    public function __construct(private DiscountFactory $discountFactory)
    {

    }

    public function createDiscounts()
    {
        foreach(range(1,100000) as $counter){
            $dateRange = random_int(1,5);
            $limitRange = random_int(1,3);
            $minRange=[0,100000,200000];
            $maxRange=[100000,200000,500000];
            $percentRange = random_int(10,35);

            $this->discountFactory->createDiscount(
                Str::random(10),
              null,
                \DateTimeImmutable::createFromMutable(new \DateTime("+ $dateRange day")),
                $limitRange,
                array_rand($minRange),
                array_rand($maxRange),
                $percentRange
            );
        }
    }
}
