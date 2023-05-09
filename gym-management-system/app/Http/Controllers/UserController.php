<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function feedback() {
        return view('user.feedback');
    }
}
