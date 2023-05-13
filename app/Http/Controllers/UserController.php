<?php

namespace App\Http\Controllers;
use App\Contracts\Services\Admin\WorkoutServiceInterface;

class UserController extends Controller
{
    private $workoutService;
 
    /**
      * Create a new controller instance.
      * @param WorkoutInterface $taskServiceInterface
      * @return void
      */
 
    public function __construct(WorkoutServiceInterface $workoutServiceInterface) 
    {
       $this->workoutService = $workoutServiceInterface;
    }

    //
    public function userprofile(){
        return view('user.profile');
    }

    public function index() {
        return view('user.index');
    }

    public function feedback() {
        return view('user.feedback');
    }

    public function workout() {
        $workouts = $this->workoutService->get();
        $workoutCounts = $workouts->count();
        return view('user.workoutlist' , ['workouts' => $workouts , 'workoutCounts' => $workoutCounts]);
    }

    public function purchase(){
        return view('user.purchase');
    }
}
