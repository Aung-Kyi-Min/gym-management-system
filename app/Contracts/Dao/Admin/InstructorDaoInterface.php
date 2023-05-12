<?php

namespace App\Contracts\Dao\Admin;

/**
 * Interface of Data Access Object for instructor
 */
interface InstructorDaoInterface
{
  public function createInstructors(array $data): void;
  public function getInstructors(): object;

}