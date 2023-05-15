<?php

namespace App\Contracts\Services\Admin;

/**
 * Interface for user service
*/
interface UserServiceInterface
{
    /**
     * Show User
     * @return object
    */
    public function get() : object;

    /**
     * Store User
     * @return void
    */
    public function store() : void;

    /**
     * Return Specific User
     * @return object
    */
    public function edit($id) : object;

    /**
     * Update User
     * @return void
    */
    public function update($id) : void;

     /**
     * Destroy User
     * @return void 
    */
    public function destroy($id) : void;

    /**
     * Search User
     * @return object
    */
    public function search() : object;
}