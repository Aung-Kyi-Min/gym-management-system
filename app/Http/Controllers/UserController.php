<?php

namespace App\Http\Controllers;

//use App\Models\Auth;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function Userprofile()
    {
        return view('user.profile');
    }

    public function index()
    {
        return view('user.index');
    }

    public function feedback()
    {
        if (Auth::guest()) {
            return redirect()->route('auth.login');
        }
        return view('user.feedback');
    }

    public function workout()
    {

        if (Auth::guest()) {
            return redirect()->route('auth.login');
        }
        return view('user.workoutlist');

    }

    public function purchase()
    {
        if (Auth::guest()) {
            return redirect()->route('auth.login');
        }
        return view('user.purchase');
    }

    public function successPurchase()
    {
        return view('user.success-purchase');
    }
}
