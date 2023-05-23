<?php

namespace App\Contracts\Dao\Admin;

/**
 * Interface of Data Access Object for task
 */
interface WorkoutDaoInterface
{
    /**
    * Show Workout
    * @return object
    */
    public function get() : object;

    /**
    * Store Workout
    * @return void
    */
    public function store() : void;

    /**
    * Return Specific Workout
    * @return object
    */
    public function edit($id) : object;

    /**
    * Update Workout
    * @return void
    */
    public function update($id , array $data) : void;

    /**
    * Destroy Workout
    * @return void 
    */
    public function destroy($id) : void;

    /**
    * search  Workout
    * @return object
    */  
    public function search($search): object;
}
