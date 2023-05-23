<?php

namespace App\Contracts\Dao;

/**
 * Interface for user service
*/
interface UserDaoInterface
{
    /**
     * send
     * @return void
     */
    public function send():void;

    /**
    * Return Users//user profile
    * @return object
    */
    public function edit($id) : object;

    /**
    * Update Users/user profile
    * @return void
    */
    public function update($id) : void;

}
