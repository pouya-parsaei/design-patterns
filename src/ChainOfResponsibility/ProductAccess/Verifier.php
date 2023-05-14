<?php

namespace Src\ChainOfResponsibility\ProductAccess;

use App\Models\Product;
use App\Models\User;

abstract class Verifier
{
    public function __construct(private ?Verifier $nextVerifier = null)
    {

    }

    public function verify(User $user, Product $product): bool
    {
        if (!$this->nextVerifier) {
            return true;
        }

        return $this->nextVerifier->verify($user, $product);
    }
}
