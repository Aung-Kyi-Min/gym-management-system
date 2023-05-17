<?php

namespace App\Contracts\Dao;

/**
 * Interface for user service
*/
interface UserDaoInterface
{
    /**
     * register
     * @return object
     */
    public function send(array $data): object;
}
