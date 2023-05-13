<?php

namespace App\Contracts\Dao;

/**
 * Interface of Data Access Object for admin
 */
interface AdminDaoInterface
{
  public function createInstructors(array $data):void;
  public function getInstructors(): object;
  
}