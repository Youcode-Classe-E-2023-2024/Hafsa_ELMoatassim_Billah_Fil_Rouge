<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        Newsletter::create(['email' => $email]);

        return redirect()->back()->with('message', 'Subscribed successfully');
    }

}
