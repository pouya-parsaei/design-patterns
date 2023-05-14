<?php

namespace Src\Facade\OrderService;

class OrderService
{
    public function __construct(private QuantityService $quantityService, private DiscountService $discountService)
    {

    }

    public function register(Basket $basket)
    {
        // Check quantity
        foreach ($basket->items() as $product) {
            $result = $this->quantityService->exists($product);
        }

        // apply discount
        $amount = $this->discountService->apply($basket->coupon());

        // register order

        $order = Order::create(1,$amount,[],$basket->coupon());
    }
}
