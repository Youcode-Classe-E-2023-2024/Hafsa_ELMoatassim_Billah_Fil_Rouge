<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     */


//    public function showCategories()
//    {
//        $categories = Category::all();
////        $products = Product::all();
//
//        return view('Admin.Dash_Product', ['categories' => $categories, 'products' => $products]);
//    }

    /**
     * Remove the specified resource from storage.
     */
//    public function destroyCategory($id)
//    {
//        $category = Category::findOrFail($id);
//        $category->delete();
//
//        return redirect()->back();
//    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }



}
