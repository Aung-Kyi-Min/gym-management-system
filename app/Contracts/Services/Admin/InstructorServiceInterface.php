<?php

namespace App\Contracts\Services\Admin;

/**
 * Interface for instructor service
*/
interface InstructorServiceInterface
{
  public function createInstructors(array $data): void;
  public function getInstructors(): object;
  public function searchInstructor():object;
  public function getInstructorById($id): object;
  public function updateInstructor(array $data, $id): void;
  public function deleteInstructorById($id): void;

  /**
   * return export instructors
  */
  public function export(): object;
  
}
