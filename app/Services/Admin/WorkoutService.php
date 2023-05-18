<?php

namespace App\Services\Admin;

use App\Contracts\Dao\Admin\WorkoutDaoInterface;
use App\Contracts\Services\Admin\WorkoutServiceInterface;

class WorkoutService implements WorkoutServiceInterface
{
    /**
     * workout Dao
     */
    private $workoutDao;

    /**
     * Class Constructor
     * @param workoutDaoInterface
     * @return void
     */
    public function __construct(WorkoutDaoInterface $workoutDao)
    {
        $this->workoutDao = $workoutDao;
    }

    /**
     * Show Workout
     * @return object
    */
    public function get() : object
    {
        return $this->workoutDao->get();
    }

    /**
     * Store Workout
     * @return void
    */
    public function store() : void
    {
        $this->workoutDao->store();
        $name = request()->file('image')->getClientOriginalName();
        request()->file('image')->storeAs('public/images/admin/workout' , $name);
    }

     /**
     * Return Specific Workout
     * @return object
    */
    public function edit($id) : object
    {
        return $this->workoutDao->edit($id);
    }

    /**
     * Update Workout
     * @return void
    */
    public function update($id , array $data) : void
    {
        $name = request()->file('image')->getClientOriginalName();
        request()->file('image')->storeAs('public/images/admin/workout' , $name);
        $this->workoutDao->update($id , $data);
    }

     /**
     * Destroy Workout
     * @return void 
    */
    public function destroy($id) : void
    {
        $this->workoutDao->destroy($id);
    }
}
