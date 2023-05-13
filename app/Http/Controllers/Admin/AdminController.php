<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contracts\Services\Admin\AdminServiceInterface;
use App\Contracts\Services\Admin\WorkoutServiceInterface;


class AdminController extends Controller
{
   private $adminService;
   private $workoutService;

   /**
     * Create a new controller instance.
     * @param AdminServiceInterface $taskServiceInterface
     * @param WorkoutInterface $taskServiceInterface
     * @return void
     */

   public function __construct(AdminServiceInterface $adminServiceInterface , WorkoutServiceInterface $workoutServiceInterface)
   {
      $this->adminService = $adminServiceInterface;
      $this->workoutService = $workoutServiceInterface;
   }

   public function index()
   {
      $workouts = $this->workoutService->get();
      $workoutCounts = $workouts->count();
      return view('admin.index' , ['workoutCounts' => $workoutCounts]);
   }

   public function edit()
   {
      return view('admin.edit');
   }

   public function user()
   {
      return view('admin.user.user');
   }

   public function member()
   {
      return view('admin.member.member');
   }

}
