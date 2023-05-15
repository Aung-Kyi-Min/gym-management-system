<?php

namespace App\Dao\Admin;

use App\Contracts\Dao\Admin\UserDaoInterface;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserDao implements UserDaoInterface
{
    /**
     * Show User
     * @return object
    */
    public function get(): object
    {
        return User::all();
    }

    /**
     * Store User
     * @return void
    */
    public function store() : void
    {
        $user = New User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->phone = request('phone');
        $user->gender = request('gender');
        $user->age = request('age');
        $user->role = request('role');
        $user->image = request()->file('image')->getClientOriginalName();
        $user->address = request('address');
        
        $user->save();
    }

    /**
     * Return Specific User
     * @return object
    */
    public function edit($id) : object
    {
        return User::findOrFail($id);
    }

    /**
     * Update Workout
     * @return void
    */
    public function update($id) : void
    {
        $user = User::findOrFail($id);
        $user->name = request('name');
        $user->password = Hash::make(request('password'));
        $user->phone = request('phone');
        $user->gender = request('gender');
        $user->age = request('age');
        $user->role = request('role');
        $user->image = request()->file('image')->getClientOriginalName();
        $user->address = request('address');
        
        $user->save();
    }

    /**
     * Destroy User
     * @return void 
    */
    public function destroy($id) : void
    {
        $user = User::findOrFail($id);
        $user->delete();
    }

    /**
     * Search User
     * @return object
    */
    public function search(): object
    {
        $searchQuery = request()->query('search');
        $users = User::where(function ($query) use ($searchQuery) {
            $query->where('name', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('email', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('role', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('address', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('gender', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('phone', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('age', 'LIKE', '%' . $searchQuery . '%');
        })
        ->latest()
        ->paginate(3);

        $users->appends(['search' => $searchQuery]);
        return $users;
    }
}