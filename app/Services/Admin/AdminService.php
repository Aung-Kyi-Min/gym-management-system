<?php

namespace App\Services\Admin;

use App\Contracts\Dao\Admin\AdminDaoInterface;
use App\Contracts\Services\Admin\AdminServiceInterface;
use Maatwebsite\Excel\Excel;
use App\Exports\UsersExport;

class AdminService implements AdminServiceInterface
{

    private $adminDao;

    public function __construct(AdminDaoInterface $adminDao)
    {
        $this->adminDao = $adminDao;
    }

    /**
    * export Instructor
    * @return object
    */ 
    public function exportuser(): object
    {
        $users = $this->adminDao->exportuser();
        return $users;
    }

     /**
    * Return Admin
    * @return object
    */
    public function edit($id) : object
    {
        return $this->adminDao->edit($id);
    }

    /**
    * Update admin
    * @return void
    */
    public function update($id) : void
    {
        $this->adminDao->update($id);
    }

}
