<?php

namespace App\Services;

use App\Contracts\Dao\UserDaoInterface;
use App\Contracts\Services\UserServiceInterface;

class UserService implements UserServiceInterface
{
    /**
     * auth Dao
     */
    private $userDao;

    /**
     * Class Constructor
     * @param userDaoInterface
     * @return void
     */

    public function __construct(UserDaointerface $userDao)
    {
        $this->userDao = $userDao;;
    }

    /**
     * register User
     * @return object
     */

    public function send():void
    {
        $this->userDao->send();
    }

    /**
    * Return Users//user profile
    * @return object
    */
    public function edit($id) : object
    {
       return $this->userDao->edit($id);
    }

    /**
    * Update Users/user profile
    * @return void
    */
    public function update($id) : void
    {
        $this->userDao->update($id);
    }
}
