<?php

namespace App\Contracts\Dao;

/**
 * Interface of Data Access Object for task
 */
interface AuthDaoInterface
{
    /**
     * register
     * @return object
     */
    public function register(array $data): object;
}
