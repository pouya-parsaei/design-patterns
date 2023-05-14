<?php

namespace Src\ChainOfResponsibility\ProductAccess\Verifiers;

use App\Models\Product;
use App\Models\User;
use Src\ChainOfResponsibility\ProductAccess\Verifier;

class UserActivationVerifier extends Verifier
{
    public function verify(User $user, Product $product): bool
    {
        if (!$user->isActive()) {
            return false;
        }

        return parent::verify($user, $product);
    }
}
