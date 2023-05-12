<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
   
   public function index() {
      return view('admin.index');
   }

   
   public function user() {
      return view('admin.user.user');
   }

   public function member() {
      return view('admin.member.member');
   }

   public function workout() {
      return view('admin.workout.workout');
   }

   public function workoutCreate(){
      return view('admin.workout.workoutCreate');
   }

   public function instructorEdit(){
      return view('admin.instructor.instructorEdit');
   }

   public function workoutEdit(){
      return view('admin.workout.workoutEdit');
   }

   public function edit() {
      return view('admin.edit');
   }
}
