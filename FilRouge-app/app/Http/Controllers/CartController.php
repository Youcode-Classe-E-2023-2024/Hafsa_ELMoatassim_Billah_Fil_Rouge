<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $userId = auth()->id();
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $existingCartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($existingCartItem) {
            $existingCartItem->update([
                'quantity' => $existingCartItem->quantity + $quantity
            ]);
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity
            ]);
        }

        $cartCount = Cart::where('user_id', $userId)->count();
        return back()->with('cartCount', $cartCount);
    }

    public function showCart()
    {
        $userId = auth()->id();
//        $productId = Cart::where('user_id', $userId)->get();
//        dd($productId);
//        $cartItems = Cart::where('user_id', $userId)->with('product_id')->get();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();



        return view('Cart', compact('cartItems'));
    }


}
