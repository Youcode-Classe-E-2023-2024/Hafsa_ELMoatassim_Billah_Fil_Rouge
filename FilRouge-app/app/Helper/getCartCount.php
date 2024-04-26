<?php

use App\Models\Cart;

function getCartCount()
{
    $userId = auth()->id();
    $count = Cart::with('product')
        ->where('user_id', $userId)
        ->get();
    return count($count);
}
