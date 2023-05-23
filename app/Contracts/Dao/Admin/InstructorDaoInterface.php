<?php

namespace App\Contracts\Dao\Admin;

/**
 * Interface of Data Access Object for instructor
 */
interface InstructorDaoInterface
{
    /**
    * Show Instructor
    * @return object
    */
    public function get() : object;

    /**
    * Store Instructor
    * @return void
    */
    public function store() : void;

    /**
    * Return Specific Instructor
    * @return object
    */
    public function edit($id) : object;

    /**
    * Update Instructor
    * @return void
    */
    public function update($id) : void;

    /**
    * Destroy Instructor
    * @return void 
    */
    public function destroy($id) : void;

    /**
    * return export instructors
    */
    public function export(): object;

    /**
    * search Instructor
    * @return object
    */  
    public function search($search): object;
}
