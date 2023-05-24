<?php

namespace App\Contracts\Dao\Admin;

/**
 * Interface of Data Access Object for task
 */
interface AdminDaoInterface
{
    /**
     * return export users
     */
    public function exportuser(): object;

    /**
    * Return Admin
    * @return object
    */
    public function edit($id) : object;

    /**
    * Update admin
    * @return void
    */
    public function update($id) : void;


}



