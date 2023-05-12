<?php

namespace App\Contracts\Services;

/**
 * Interface for user service
*/
interface AdminServiceInterface
{
  public function createInstructors(array $data):void;
}
