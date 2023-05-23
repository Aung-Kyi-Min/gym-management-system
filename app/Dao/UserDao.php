<?php

namespace App\Dao;

use App\Models\User;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Contracts\Dao\UserDaoInterface;

class UserDao implements UserDaoInterface
{
    
    /**
     * send userfeedback
     * @return object
     */
    public function send( ):void
    {
        $user = Auth::user();
        $feedback = new Feedback();
        $feedback->message=request('message');
        $feedback->user_id = $user->id;
        $feedback->save();
    }
    /**
    * Return Users//user profile
    * @return object
    */
    public function edit($id) : object
    {
        return User::findOrFail($id);
    }

    /**
    * Update Users/user profile
    * @return void
    */
    public function update($id): void
    {
        // Retrieve the currently logged-in user
        $user = auth()->user();
    
        // Update the user profile data
        $user->name = request('name');
        $user->email = request('email');
        $user->gender = request('gender');
        $user->age = request('age');
        $user->phone = request('phone');
        $user->address = request('address');
    
        $password = request('password');
        if (!empty($password)) {
            $user->password = Hash::make($password);
        }
    
        // Handle the image field
        $image = request('image');
        if ($image) {
            $name = $image->getClientOriginalName();
            $image->storeAs('public/images/admin/user', $name);
            $user->image = $name;
        } 
    
        // Save the changes
        $user->save();
    }
    
  
}