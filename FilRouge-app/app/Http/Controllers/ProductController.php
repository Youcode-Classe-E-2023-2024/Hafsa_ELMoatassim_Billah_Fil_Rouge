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
            'price' => 'required|numeric',
            'product_nbr' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|exists:categories,id',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->product_nbr = $request->product_nbr;
        $product->description = $request->description;
        $product->image = $request->image->store('images', 'public');
        $product->category = $request->category;
        $product->save();

        return redirect()->route('Admin.Dash_Product')->with('success', 'Product added successfully.');
    }

    public function showProducts()
    {

        $products = Product::all();

        return view('Admin.Dash_Product', ['products' => $products]);
    }



}
