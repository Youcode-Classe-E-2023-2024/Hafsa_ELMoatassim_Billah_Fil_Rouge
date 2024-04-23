<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function addBlog(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];
        $blog->picture = $request->picture->store('images', 'public');
        $blog->save();

        return redirect()->back()->with('success', 'Blog added successfully.');
    }

    public function showBlogs()
    {
        $blogs = Blog::all();
        return view('Admin.Dash_Blog', compact('blogs'));
    }

    public function showBlog()
    {
        $blogs = Blog::all();
        return view('Blog', compact('blogs'));
    }

    public function showBlogDescription($id)
    {
        $blog = Blog::findOrFail($id);
        return view('Blog_Description', compact('blog'));
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }

    public function updateBlog(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];

        $blog->save();

        return redirect()->back()->with('success', 'Blog updated successfully.');
    }



}
