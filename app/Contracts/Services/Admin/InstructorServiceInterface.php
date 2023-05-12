<?php

namespace App\Contracts\Services\Admin;

/**
 * Interface for instructor service
*/
interface InstructorServiceInterface
{
  public function createInstructors(array $data): void;
  public function getInstructors(): object;
}
