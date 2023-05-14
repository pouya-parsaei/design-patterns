<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public static function findByUserAndProduct(User $user, Product $product)
    {
        return self::query()
            ->where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();
    }
}
