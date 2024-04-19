<?php

namespace App\Http\Controllers;

use App\Mail\Response;
use App\Models\Contact;
use App\Models\ContactAdmin;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactAdminController extends Controller
{
//    public function contact(Request $request)
//    {
//        $message = $request->input('message');
//        $email = $request->input('email');
//
//        if ($message && $email) {
//            $this->sendResponse($email, $message);
//        }
//
//        return redirect()->back()->with('message', 'Message has been sent successfully');
//    }

    public function contact(Request $request)
    {
        $message = $request->input('message');
        $email = $request->input('email');

//        dd($message);
        if ($message && $email) {
            $contact = Contact::where('email', $email)->first();

            if ($contact) {
                $this->sendResponse($contact, $message);
            } else {
                return redirect()->back()->with('error', 'Contact not found');
            }
        }

        return redirect()->back()->with('message', 'Message has been sent successfully');
    }


    private function sendResponse($contact, $message)
    {
        $messageContent = is_string($message) ? $message : ($message instanceof \Illuminate\Mail\Message ? $message->getBody() : '');
//        dd($messageContent);

        Mail::to($contact->email)->send(new Response($contact, $messageContent));
    }

}
