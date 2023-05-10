<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
   public function index() {
      return view('admin.index');
   }

   public function user() {
      return view('admin.user');
   }

   public function instructor() {
      return view('admin.instructor');
   }

   public function member() {
      return view('admin.member');
   }

   public function instructorCreate(){
      return view('admin.instructorCreate');
   }
   public function workoutCreate(){
      return view('admin.workoutCreate');
   }
}
