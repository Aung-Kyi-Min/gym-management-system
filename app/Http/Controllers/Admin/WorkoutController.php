<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkoutRequest;
use App\Contracts\Services\Admin\WorkoutServiceInterface;

class WorkoutController extends Controller
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
 
 
    public function workout() 
    {
       $workouts = $this->workoutService->get();
       return view('admin.workout.workout' , ['workouts' => $workouts]);
    }
 
    public function create()
    {
       return view('admin.workout.workoutCreate');
    }
 
    /**
      * Store Workout
      * @return void
     */
    public function store(WorkoutRequest $request)
    {
       $this->workoutService->store($request->only([
          'name',
          'price',
          'image',
          'description',
       ]));
       return redirect('/admin/workout');
    }
 
    public function edit($id)
    {
       $workout = $this->workoutService->edit($id);
       return view('admin.workout.workoutEdit' , ['workout' => $workout]);
    }
 
    public function update(WorkoutRequest $request ,$id)
    {
       $this->workoutService->update($id , $request->only([
          'name',
          'price',
          'image',
          'description',
       ]));
       return redirect('/admin/workout');
    }
 
    public function destroy($id) 
    {
       $this->workoutService->destroy($id);
       return redirect('/admin/workout');
    }
 
 }
