<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        $email = $request->input('email');

        Newsletter::create(['email' => $email]);

        return redirect()->back()->with('message', 'Subscribed successfully');
    }


    public function showUnsubscribeForm($id)
    {
        $user = Newsletter::find($id);

        if (!$user) {
            abort(404);
        }

        return view('Admin.Dashboard', ['user' => $user]);
    }


    public function unsubscribe($email)
    {
        $subscriber = Newsletter::where('email', $email)->first();

        if (!$subscriber) {
            abort(404);
        }

        $subscriber->update(['subscribed' => 0]);

        return view('unsubscribe_success', ['email' => $email]);
    }

}
