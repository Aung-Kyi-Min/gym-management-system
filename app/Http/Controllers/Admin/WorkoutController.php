<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
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

    public function create()
    {
       return view('admin.workout.workoutCreate');
    }
 
    public function workout(Request $request)
    {
        $search = $request->input('search', '');
        $workouts = $this->workoutService->search($search);
        
        foreach ($workouts as $workout) 
        {
            $workout->limitedDescription =Str::limit($workout->description, 40);
        }
        
        return view('admin.workout.workout', compact('workouts', 'search'));
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
