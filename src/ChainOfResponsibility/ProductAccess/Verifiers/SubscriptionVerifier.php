<?php

namespace Src\ChainOfResponsibility\ProductAccess\Verifiers;

use App\Models\Product;
use App\Models\Subscription;
use App\Models\User;
use Src\ChainOfResponsibility\ProductAccess\Verifier;

class SubscriptionVerifier extends Verifier
{
    public function verify(User $user, Product $product): bool
    {
        $subscription = Subscription::findByUserAndProduct($user, $product);

        if (!$subscription) {
            return false;
        }

        return parent::verify($user, $product);
    }
}
