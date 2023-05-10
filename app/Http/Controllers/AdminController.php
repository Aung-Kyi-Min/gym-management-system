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

   public function member() {
      return view('admin.member');
   }

   public function instructor() {
      return view('admin.instructor');
   }

   public function workout() {
      return view('admin.workout');
   }

   public function instructorCreate(){
      return view('admin.instructorCreate');
   }
   public function workoutCreate(){
      return view('admin.workoutCreate');
   }

   public function instructorEdit(){
      return view('admin.instructorEdit');
   }

   public function workoutEdit(){
      return view('admin.workoutEdit');
   }

   public function edit() {
      return view('admin.edit');
   }
}
