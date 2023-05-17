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
     * @param authDaoInterface
     * @return void
     */

    public function __construct(AuthDaointerface $authDao)
    {
        $this->userDao = $userDao;;
    }

    /**
     * register User
     * @return object
     */

    public function send(array $data): object{
        return $this->userDao->send($data);
    }
}
