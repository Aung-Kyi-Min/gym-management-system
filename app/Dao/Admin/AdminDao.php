<?php

namespace App\Dao\Admin;

use App\Models\User;
use App\Contracts\Dao\Admin\AdminDaoInterface;

class AdminDao implements AdminDaoInterface
{
     /**
     * Export user
     * @return object
    */
    public function exportuser(): object
    {
        $users = User::where('role', 1)->get();
        return $users;
    }

}
