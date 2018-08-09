<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:48
 */

namespace Blue\Repository\User;


use Blue\Infrastructure\User\UserInfrastructure;

class UserRepository
{

    private $userInfrastructure;

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        $this->userInfrastructure = new UserInfrastructure();
    }


    public function findById($userId)
    {
        return UserMapper::map($this->userInfrastructure->findById($userId));
    }
}