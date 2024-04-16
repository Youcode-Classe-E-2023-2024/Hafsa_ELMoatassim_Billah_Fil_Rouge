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

        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function showProducts()
    {
        $categories = Category::all();

        $products = Product::all();
        return view('Admin.Dash_Product', compact('products', 'categories'));
    }

    public function softDelete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product soft deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->price = $request->input('price');
        $product->product_nbr = $request->input('product_nbr');

        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully.');
    }






}
