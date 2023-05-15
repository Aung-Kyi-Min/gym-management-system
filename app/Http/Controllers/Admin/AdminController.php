<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contracts\Services\Admin\AdminServiceInterface;
use App\Contracts\Services\Admin\WorkoutServiceInterface;
use App\Contracts\Services\Admin\InstructorServiceInterface;
use App\Contracts\Services\Admin\UserServiceInterface;
use App\Models\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Excel;


class AdminController extends Controller
{
   private $workoutService;
   private $instructorService;
   private $userService;

   /**
     * Create a new controller instance.
     * @param AdminServiceInterface $taskServiceInterface
     * @param WorkoutServiceInterface $taskServiceInterface
     * @param InstructorServiceInterface $taskServiceInterface
     * @param UserServiceInterface $taskServiceInterface
     * @return void
     */

   public function __construct(AdminServiceInterface $adminServiceInterface , WorkoutServiceInterface $workoutServiceInterface , InstructorServiceInterface $instructorServiceInterface , UserServiceInterface $userServiceInterface)
   {
      $this->workoutService = $workoutServiceInterface;
      $this->instructorService = $instructorServiceInterface;
      $this->userService = $userServiceInterface;
   }

   public function index()
   {
      $workouts = $this->workoutService->get();
      $workoutCounts = $workouts->count();
      $instructors = $this->instructorService->getInstructors();
      $instructorCounts = $instructors->count();
      $users = $this->userService->get();
      $userCounts = $users->count();
      return view('admin.index' , ['workoutCounts' => $workoutCounts , 'instructorCounts' => $instructorCounts , 'userCounts' => $userCounts]);
   }

   public function edit()
   {
      return view('admin.edit');
   }

   public function member()
   {
      return view('admin.member.member');
   }

}
