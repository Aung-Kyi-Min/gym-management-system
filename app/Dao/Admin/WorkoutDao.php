<?php

namespace App\Dao\Admin;

use App\Contracts\Dao\Admin\WorkoutDaoInterface;
use App\Models\Workout;

class WorkoutDao implements WorkoutDaoInterface
{
    /**
     * Show Workout
     * @return object
    */
    public function get(): object
    {
        return Workout::all();
    }

    /**
     * Store Workout
     * @return void
    */
    public function store() : void
    {
        $workout = new Workout();
        $workout->name = request('name');
        $workout->image = request()->file('image')->getClientOriginalName();
        $workout->price = request('price');
        $workout->description = request('description');
        
        $workout->save();
    }

    /**
     * Return Specific Workout
     * @return object
    */
    public function edit($id) : object
    {
        return Workout::findOrFail($id);
    }

    /**
     * Update Workout
     * @return void
    */
    public function update($id) : void
    {
        $workout = Workout::findOrFail($id);
        $workout->name = request('name');
        $workout->image = request()->file('image')->getClientOriginalName();
        $workout->price = request('price');
        $workout->description = request('description');
        
        $workout->save();
    }

    /**
     * Destroy Major
     * @return void 
    */
    public function destroy($id) : void
    {
        $workout = Workout::findOrFail($id);
        $workout->delete();
    }
}