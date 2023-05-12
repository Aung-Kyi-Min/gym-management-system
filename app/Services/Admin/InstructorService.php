<?php
namespace App\Services\Admin;

use App\Contracts\Dao\Admin\InstructorDaoInterface;
use App\Contracts\Services\Admin\InstructorServiceInterface;

class InstructorService implements InstructorServiceInterface
{
    public function __construct(InstructorDaoInterface $instructorDao)
    {
        $this->instructorDao = $instructorDao;
    }

    public function createInstructors(array $data): void
    {
        $this->instructorDao->createInstructors($data);
    }
    public function getInstructors(): object
    {
        return $this->instructorDao->getInstructors();
    }
    
    public function searchInstructor():object
    {
        return $this->instructorDao->searchInstructor();
    }
}
