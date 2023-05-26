<?php

namespace App\Services\Admin;

use App\Contracts\Dao\Admin\UserDaoInterface;
use App\Contracts\Services\Admin\UserServiceInterface;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;

class UserService implements UserServiceInterface
{
    /**
     * user Dao
     */
    private $userDao;

    /**
     * Class Constructor
     * @param userDaoInterface
     * @return void
     */
    public function __construct(UserDaoInterface $userDao)
    {
        $this->userDao = $userDao;
    }

    /**
     * Show User
     * @return object
    */
    public function get() : object
    {
        return $this->userDao->get();
    }

    /**
     * Store User
     * @return void
    */
    public function store() : void
    {
        $this->userDao->store();
        Mail::to(request('email'))->send(new SignUp());
        $name = request()->file('image')->getClientOriginalName();
        request()->file('image')->storeAs('public/images/admin/user' , $name);
    }

    /**
     * Return Specific User
     * @return object
    */
    public function edit($id) : object
    {
        return $this->userDao->edit($id);
    }

    /**
     * Update Workout
     * @return void
    */
    public function update($id , array $data) : void
    {
        $this->userDao->update($id , $data);
        $name = request()->file('image')->getClientOriginalName();
        request()->file('image')->storeAs('public/images/admin/user' , $name);
    }

     /**
     * Destroy User
     * @return void 
    */
    public function destroy($id) : void
    {
        $this->userDao->destroy($id);
    }

    /**
    * search user
    * @return object
    */  
    public function search($search): object
    {
       return  $this->userDao->search($search);
    }

          /**
     * Return Specific User
     * @return object
    */
    public function editPassword($id): object
    {
        return $this->userDao->editPassword($id);
    }
    
    /**
     * Update user password
     *
     * @param $request
     * @param $user
     * @return void
    */

     public function passUpdate($request, $user): void
    {

        $this->userDao->passUpdate($request, $user);
    }
}