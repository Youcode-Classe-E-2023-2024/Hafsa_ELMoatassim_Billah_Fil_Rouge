<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        Newsletter::create(['email' => $email]);

        return redirect()->back()->with('message', 'Subscribed successfully');
    }

    public function unsubscribe($user_id)
    {
        $user = User::find($user_id);

        if (!$user) {
            abort(404);
        }

        $user->update(['subscribed' => false]);

        return view('unsubscribe_success', ['user' => $user]);
    }




}
