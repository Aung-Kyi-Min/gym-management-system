<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Userprofile(){
        return view('user.profile');
    }

    public function index() {
        return view('user.index');
    }

    public function feedback() {
        return view('user.feedback');
    }
}
