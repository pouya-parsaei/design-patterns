<?php

namespace Src\ChainOfResponsibility\ProductAccess;

use App\Models\Product;
use App\Models\User;
use Src\ChainOfResponsibility\ProductAccess\Verifiers\SubscriptionActivationVerifier;
use Src\ChainOfResponsibility\ProductAccess\Verifiers\SubscriptionExpirationVerifier;
use Src\ChainOfResponsibility\ProductAccess\Verifiers\SubscriptionVerifier;
use Src\ChainOfResponsibility\ProductAccess\Verifiers\UserActivationVerifier;

class AccessVerifier
{
    public function verify(User $user, Product $product):bool
    {
        return $this->buildVerifierChain()->verify($user, $product);
    }

    private function buildVerifierChain()
    {
        $activationVerifier = new SubscriptionActivationVerifier();
        $expirationVerifier = new SubscriptionExpirationVerifier($activationVerifier);
        $subscriptionVerifier = new SubscriptionVerifier($expirationVerifier);
        return new UserActivationVerifier($subscriptionVerifier);
    }
}
