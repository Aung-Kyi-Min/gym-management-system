<?php

namespace App\Contracts\Dao;

use SebastianBergmann\Type\VoidType;

/**
 * Interface of Data Access Object for task
 */
interface PaymentDaoInterface
{
    public function store(array $data): void;

}
