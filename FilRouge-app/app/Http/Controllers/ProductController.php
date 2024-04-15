<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'product_nbr' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->product_nbr = $request->product_nbr;
        $product->description = $request->description;
        $product->image = $request->image->store('images', 'public');
        $product->category = $request->category;
        $product->save();

        return redirect()->route('Admin.dashboard')->with('success', 'Product added successfully.');
    }




}
