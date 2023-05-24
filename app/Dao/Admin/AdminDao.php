<?php

namespace App\Dao\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

     /**
    * Return Admin
    * @return object
    */
    public function edit($id) : object
    {
        return User::findOrFail($id);
    }


    /**
    * Update admin
    * @return void
    */
    public function update($id) : void
    {
        // Retrieve the currently logged-in user/admin
        $admin= auth()->user();
        // Update the admin data
       
        $admin->name = request('name');
        $admin->email = request('email');
        $admin->gender = request('gender');
        $admin->age = request('age');
        $admin->role= request('role');
        $admin->phone = request('phone');
        $admin->address =request('address');
        
        $image = request('image');
        if ($image) {
            $name = $image->getClientOriginalName();
            $image->storeAs('public/images/admin/user', $name);
            $admin->image = $name;
        } 
    

        // Save the changes
        $admin->save();
    }

}
