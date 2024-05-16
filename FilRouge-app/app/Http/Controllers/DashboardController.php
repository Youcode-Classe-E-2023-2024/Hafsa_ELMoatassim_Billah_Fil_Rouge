<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $bannedUsers = User::where('deleted', 1)->get();
        $activeUsers = User::where('deleted', 0)->where('role', '!=', 1)->get();
        $totalUsers = User::count();
        $totalProducts = Product::count();
        $totalContacts = Contact::where('status', 'not treated')->count();
        return view('Admin.dashboard', ['bannedUsers' => $bannedUsers, 'activeUsers' => $activeUsers, 'totalUsers' => $totalUsers, 'totalProducts' => $totalProducts, 'totalContacts' => $totalContacts ]);
    }


    public function banUser(User $user)
    {
        $user->deleted = 1;
        $user->save();

        // Invalidate user's session
//        Auth::logoutOtherDevices($user->password);

        return redirect()->route('dashboard')->with('success', 'User banned successfully.');
    }


    public function recoverUser(User $user)
    {
        $user->deleted = 0;
        $user->save();

        return redirect()->route('dashboard')->with('success', 'User recovered successfully.');
    }

}
