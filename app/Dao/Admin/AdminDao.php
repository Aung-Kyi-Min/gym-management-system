<?php

namespace App\Dao\Admin;

use App\Contracts\Dao\Admin\AdminDaoInterface;
use App\Models\User;

class AdminDao implements AdminDaoInterface
{
    public function exportuser(): object
    {
        $users = User::where('role', 1)->get();
        return $users;
    }
}
