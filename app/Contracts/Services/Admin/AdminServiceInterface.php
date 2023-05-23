<?php

namespace App\Contracts\Services\Admin;

/**
 * Interface for user service
*/
interface AdminServiceInterface
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
