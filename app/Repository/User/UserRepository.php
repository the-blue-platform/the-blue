<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 12:48
 */

namespace Blue\Repository\User;


use Blue\Infrastructure\User\UserInfrastructure;
use phpDocumentor\Reflection\Types\Null_;

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
        $userEntity = $this->userInfrastructure->findById($userId);

        return $userEntity ? UserMapper::map($userEntity) : null;
    }

    public function findByUserIdList($userIdList)
    {
        return UserMapper::mapList($userEntity = $this->userInfrastructure->findByIdList($userIdList));
    }
}