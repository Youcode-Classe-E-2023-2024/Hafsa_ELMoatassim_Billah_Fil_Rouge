<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function submitComment(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'user_name' => 'required',
            'user_email' => 'required|email',
        ]);

        Review::create([
            'user_name' => $request->input('user_name'),
            'user_email' => $request->input('user_email'),
            'user_image' => $request->input('user_image'),
            'comment' => $request->input('comment'),
        ]);

        return redirect()->back()->with('success', 'Your comment has been submitted successfully.');
    }

}
