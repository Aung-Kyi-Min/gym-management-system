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
    public function getInstructorById($id): object
    {
        return $this->instructorDao->getInstructorById($id);
    }
    public function updateInstructor(array $data, $id): void
    {
        $this->instructorDao->updateInstructor($data, $id);
    }
    
    public function deleteInstructorById($id): void
    {
        $this->instructorDao->deleteInstructorById($id);
    }
}
