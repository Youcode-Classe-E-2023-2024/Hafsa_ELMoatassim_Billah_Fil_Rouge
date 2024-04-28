<?php

namespace App\Http\Controllers;

use App\Mail\NewsProduct;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Newsletter;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'oldprice' => 'required|numeric',
            'product_nbr' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|exists:categories,id',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->oldprice = $request->oldprice;
        $product->product_nbr = $request->product_nbr;
        $product->description = $request->description;
        $product->image = $request->image->store('images', 'public');
        $product->category = $request->category;
        $product->save();

        if ($product) {
            $this->sendEmailToSubscriber();
        }

        return redirect()->back()->with('success', 'Product added successfully.');
    }

    private function sendEmailToSubscriber()
    {
        $user = Auth::user();

        $subscribers = Newsletter::where('subscribed', '1')->get();

        if ($subscribers) {
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsProduct($user, $subscriber->email));
            }
        }
    }


    public function showProducts()
    {
        $categories = Category::all();
        $products = Product::whereNull('deleted_at')->get();

        return view('All_products', compact('products', 'categories'));
    }

    public function showProductsAdmin()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('Admin.Dash_Product', compact('products', 'categories'));
    }

    public function showProductDescription($id)
    {
        $product = Product::findOrFail($id);
        return view('Description', compact('product'));
    }

    public function showLast4Products()
    {
        $products = Product::latest()->take(4)->get();
        return view('Home', compact('products'));
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
    public function test()
        {
            return view('emails.product_news');
        }


}
