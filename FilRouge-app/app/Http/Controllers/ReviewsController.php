<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    public function submitComment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Review::create([
            'name' => $request->input('name'),
            'comment' => $request->input('comment'),
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Your comment has been submitted successfully.');
    }

    public function showReviews()
    {
        $reviews = Review::all();

        return view('/', compact('reviews'));
    }






}
